<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");

include_once("chkAuthenticate.php");

header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set("error_reporting",-1);
extract($_GET);


if(isset($limit) && $limit != '' ){
	$whereQry = '';
	$qry = [];
	$start = 0;
	$limit *= 10;
	$start = $limit-10;
	if(isset($title) &&  $title != ''){
		$whereQry .= " a.job_title like :title AND ";
		$qry[':title'] = "%".$title."%";
	}
	if(isset($job_type) &&  $job_type != ''){
		$whereQry .= " a.job_type IN(".$job_type.") AND ";
	}
	if(isset($exp_level) &&  $exp_level != ''){
		$whereQry .= " a.experience_requirement = :experience_level  AND ";
		$qry[':experience_level'] = $exp_level;
	}
	if(isset($location) && $location != ''){
		$whereQry .= " a.job_location like :location AND ";
		$qry[':location'] = "%".$location."%";
	}
	if(isset($language) && $language != ''){
		$tmp = explode(",",$language);
		$tmpStr = '';
		foreach($tmp as $v){
			$tmpStr .= " FIND_IN_SET (".$v.", a.language) > 0 OR ";	
		}
		$whereQry .= "(".substr($tmpStr,0,strlen($tmpStr)-3)." ) AND ";
	}
	if(isset($salary) && $salary != ''){
		$whereQry .= " ( $salary BETWEEN a.salaryRangeMin AND a.salaryRangeMax  ) AND ";
	}
	if(isset($industry) && $industry){
		$whereQry .= " b.name like :industry AND ";
		$qry[":industry"] = "%".$industry."%";
	}
	
	$totalQueryStr = "SELECT *,e.company_name cmpname,d.name emptype FROM `".JOB_POSTINGS."` a 
					  INNER JOIN `".JOB_INDUSTRY."` b on b.id = a.id
					  LEFT JOIN `".COMPANIES."` c on c.id = a.company_id
					  LEFT JOIN `".EMPLOYERS."` e on e.employer_id = a.company_id
					  INNER JOIN `".EMPLOYMENT_TYPE."` d on d.id = a.job_type
					  WHERE $whereQry 1 = 1 ";
	
	
	$queryStr = "SELECT *,e.company_name cmpname,d.name emptype,a.id jobid FROM `".JOB_POSTINGS."` a 
				 INNER JOIN `".JOB_INDUSTRY."` b on b.id = a.id
				 LEFT JOIN `".COMPANIES."` c on c.id = a.company_id
				 LEFT JOIN `".EMPLOYERS."` e on e.employer_id = a.company_id
				 INNER JOIN `".EMPLOYMENT_TYPE."` d on d.id = a.job_type	
				 WHERE  $whereQry 1 = 1 ORDER BY job_postings_date desc LIMIT $start,$limit";
				 
	//echo $queryStr;
	
	$attempt_stmt = $pdo->prepare($queryStr);
	$attempt_stmt->execute($qry);
	
	
	//get total results
	$total_qry_result = $pdo->prepare($totalQueryStr);
	$total_qry_result->execute($qry);
	$rowCount = $total_qry_result->rowCount();
	
	$search_result = $attempt_stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$result = array();
	foreach($search_result as $val){
		$result[] = array(
				'jobid' => $val['jobid'],
				'jobTitle' => $val['job_title'],
                'companyName' => $val['cmpname'],
                'location'  => $val['job_location'],
                'salary' => $val['salaryRangeMin']." - ".$val['salaryRangeMax'],
                'companyLogo' =>  $val['logo'],
                'postedDate' => $val['job_postings_date'],
                'jobType' => $val['emptype'],
				'jobShift' => $val['shift_timing'],
                'experienceLevel' => $val['experience_requirement'],
				'job_description' => $val['job_description'],
                'industry' => $val['cmpname']);
	}
	if(count($result) >= 1){
		$data['data'] = $result;
		$data['totalcnt'] = $rowCount;
		echo json_encode($data);
	}
	else{
		$data['data'] = [];
		$data['totalcnt'] = 0;
		echo json_encode($data);
	}
}
else{
	echo json_encode(array("result" => 'Invalid Request'));
}

?>