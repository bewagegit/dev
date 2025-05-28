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
		$whereQry .= " a.title like :title AND ";
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
		$whereQry .= " FIND_IN_SET (:language, a.languages_id) > 0  AND ";
		$qry[':language'] = $language;
	}
	if(isset($salary) && $salary != ''){
		$whereQry .= " ( $salary BETWEEN a.salary_start AND a.salary_end  ) AND ";
	}
	if(isset($industry) && $industry){
		$whereQry .= " b.category_name like :category_name AND ";
		$qry[":category_name"] = "%".$industry."%";
	}
	
	$totalQueryStr = "SELECT *,c.name cmpname,d.name emptype,e.name experience FROM `".JOBS."` a 
					  INNER JOIN `".JOB_CATEGORIES."` b on a.category_id = b.id
					  INNER JOIN `".COMPANIES."` c on c.id = a.company_id
					  INNER JOIN `".EMPLOYMENT_TYPE."` d on d.id = a.job_type
					  INNER JOIN `".EXPERIENCE_LEVEL."` e on e.id = a.experience
					  WHERE $whereQry 1 = 1 ";
	
	
	$queryStr = "SELECT *,c.name cmpname,d.name emptype,e.name experience FROM `".JOBS."` a 
			  INNER JOIN `".JOB_CATEGORIES."` b on a.category_id = b.id
			  INNER JOIN `".COMPANIES."` c on c.id = a.company_id
			  INNER JOIN `".EMPLOYMENT_TYPE."` d on d.id = a.job_type
			  INNER JOIN `".EXPERIENCE_LEVEL."` e on e.id = a.experience
			  WHERE  $whereQry 1 = 1 ORDER BY posted_on desc LIMIT $start,$limit";
	
	$attempt_stmt = $pdo->prepare($queryStr);
	$attempt_stmt->execute($qry);
	
	
	//get total results
	$total_qry_result = $pdo->prepare($totalQueryStr);
	$total_qry_result->execute($qry);
	$rowCount = $total_qry_result->rowCount();


	
	$search_result = $attempt_stmt->fetchAll(PDO::FETCH_ASSOC);
	$result = array();
	foreach($search_result as $val){
		$result[] = array('jobTitle' => $val['title'],
                'companyName' => $val['title'],
                'location'  => $val['location'],
                'salary' => $val['salary_start']." - ".$val['salary_end'],
                'companyLogo' =>  $val['logo'],
                'postedDate' => $val['posted_on'],
                'jobType' => $val['emptype'],
                'experienceLevel' => $val['experience'],
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