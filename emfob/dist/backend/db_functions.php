<?php

function db_select($select,$from,$where = "1=1",$whereArray=array()){
	global $pdo;
	$query = "select $select from $from where $where";
	$stmt = $pdo->prepare($query);
    $stmt->execute($whereArray);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}

?>