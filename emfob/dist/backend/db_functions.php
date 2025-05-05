<?php

function db_select($select,$from,$where = "1=1",$whereArray=array()){
	global $pdo;
	$query = "select $select from $from where $where";
	$stmt = $pdo->prepare($query);
    $stmt->execute($whereArray);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}

function db_insert($insertQry,$data=array()){
	global $pdo;
	$stmt = $pdo->prepare($insertQry);
	$stmt->execute($data);
	return $result;
}

function db_update($updateQry,$data=array()){
	global $pdo;
	$stmt = $pdo->prepare($updateQry);
	$stmt->execute($data);
	return $result;
}

?>