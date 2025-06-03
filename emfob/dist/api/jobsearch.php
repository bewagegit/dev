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
		$whereQry .= " a.job_type = :job_type AND ";
		$qry[':job_type'] = $job_type;
	}
	if(isset($exp_level) &&  $exp_level != ''){
		$whereQry .= " a.experience = :experience_level  AND ";
		$qry[':experience_level'] = $exp_level;
	}
	if(isset($location) && $location != ''){
		$whereQry .= " a.location like :location AND ";
		$qry[':location'] = "%".$location."%";
	}
	if(isset($language) && $language != ''){
		//$whereQry .= " a.language like :language AND ";
		//$qry[':language'] = "%".$language."%";
	}
	if(isset($salary) && $salary != ''){
		$whereQry .= " ( $salary BETWEEN a.salaryRangeMin AND a.salaryRangeMax  ) AND ";
	}
	if(isset($industry) && $industry){
		$whereQry .= " b.category_name like :category_name AND ";
		$qry[":category_name"] = "%".$industry."%";
	}
	
	$totalQueryStr = "SELECT *,c.name cmpname,d.name emptype FROM `".JOB_POSTINGS."` a 
					  INNER JOIN `".JOB_INDUSTRY."` b on b.id = a.id
					  LEFT JOIN `".COMPANIES."` c on c.id = a.company_id
					  INNER JOIN `".EMPLOYMENT_TYPE."` d on d.id = a.job_type
					  WHERE $whereQry 1 = 1 ";
	
	$queryStr = "SELECT *,c.name cmpname,d.name emptype,a.id jobid FROM `".JOB_POSTINGS."` a 
				 INNER JOIN `".JOB_INDUSTRY."` b on b.id = a.id
				 LEFT JOIN `".COMPANIES."` c on c.id = a.company_id
				 INNER JOIN `".EMPLOYMENT_TYPE."` d on d.id = a.job_type	
				 WHERE  $whereQry 1 = 1 ORDER BY job_postings_date desc LIMIT $start,$limit";
	
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
                'experienceLevel' => $val['experience_requirement'],
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
/*

jobTitle: 'Software Engineer',
                companyName: 'Tech Corp',
                location: 'New York, USA',
                salary: '50,000',
                companyLogo: 'https://static.vecteezy.com/system/resources/previews/020/500/331/original/hyundai-logo-brand-symbol-with-name-blue-design-south-korean-car-automobile-illustration-free-vector.jpg',
                postedDate: '2 days ago',
                jobType: 'Full-time',
                experienceLevel: 'Mid-level',
                industry: 'Tech'
				*/
?>