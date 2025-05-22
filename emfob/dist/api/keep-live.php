<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set("error_reporting",-1);

//update the users to online with session
$updateQry = "update ".USERS." SET is_online = 1 WHERE user_id = ? ";
db_update($updateQry,array($_SESSION['user_id']));
print_r($_SESSION['user_id']);
?>