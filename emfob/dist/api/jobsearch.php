<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set("error_reporting",-1);
extract($_GET);

if(isset($job_type) && $job_type != '' &&
	isset($limit) && $limit != '' 
		){
	$whereQry = '';
	$qry = [];
	if(isset($job_type) &&  $job_type != ''){
		$whereQry .= " a.job_type = :job_type AND ";
		$qry[':job_type'] = $job_type;
	}
	if(isset($exp_level) &&  $exp_level != ''){
		$whereQry .= " a.experience = :experience_level  AND ";
		$qry[':experience_level'] = $exp_level;
	}
	if(isset($location) && $location != ''){
		$whereQry .= " a.location = :location AND ";
		$qry[':location'] = $location;
	}
	if(isset($salary) &&  $salary != ''){
		$salExplode = explode("-",$salary);
		$whereQry .= " a.salary_start >=  :salstart AND salary_end <=  :salend  AND ";
		$qry[":salstart"] = $salExplode[0];
		$qry[":salend"] = $salExplode[1];
	}
	if(isset($industry) && $industry){
		$whereQry .= " b.category_name = :category_name AND ";
		$qry[":category_name"] = $industry;
	}
	
	$queryStr = "SELECT *,c.name cmpname,d.name emptype,e.name experience FROM `jobs` a 
			  INNER JOIN `job_categories` b on a.category_id = b.id
			  INNER JOIN `companies` c on c.id = a.company_id
			  INNER JOIN `employment_type` d on d.id = a.job_type
			  INNER JOIN `experience_level` e on e.id = a.experience
			  WHERE  $whereQry 1 = 1 ";

	$attempt_stmt = $pdo->prepare($queryStr);
	$attempt_stmt->execute($qry);
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
	if(count($result) > 1)
		echo json_encode($result);
	else
		echo json_encode($result);
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