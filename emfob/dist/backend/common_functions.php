<?php

//get All User Types
function getAllUserTypes(){
	//Get All User Types
	$userTypes = db_select('users_types_id,users_types_name',USERS_TYPES);
	return $userTypes;
}
?>