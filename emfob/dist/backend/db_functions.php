<?php

function db_select($select,$from,$where = "1=1",$whereArray=array(),$orderBy = ''){
	global $pdo;
	$query = "SELECT $select FROM $from WHERE $where $orderBy";
	$stmt = $pdo->prepare($query);
    $stmt->execute($whereArray);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}

function db_insert($insertQry,$data=array()){
	global $pdo;
	$stmt = $pdo->prepare($insertQry);
	$stmt->execute($data);
}

function db_update($updateQry,$data=array()){
	global $pdo;
	$stmt = $pdo->prepare($updateQry);
	$stmt->execute($data);
}

?>