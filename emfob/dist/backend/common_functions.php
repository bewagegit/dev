<?php

//get All User Types
function getAllUserTypes(){
	//Get All User Types
	$userTypes = db_select('users_types_id,users_types_name',USERS_TYPES);
	return $userTypes;
}

//get All Gender, nationality, communication_method, marital_status
function getAllSelection($selectionTable){
	//Get All selection id , name
	$result = db_select('id,name',$selectionTable);
	return $result;
}

//get All user details
function getUserDetails($col, $selectionTable,$where,$whereArray){
	//Get All details
	$result = db_select($col,$selectionTable,$where,$whereArray);
	return $result;
}

//send mail to the users
function sendMail($to,$subject,$message,$headers=''){
	
	// Set content-type header for HTML
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// Additional headers
	$headers .= "From: ".EMAILADDRESS."" . "\r\n";
	
	if (mail($to, $subject, $message, $headers)) 
		return 1;
	else 
		return 0;
		
}

//encrypt users data
function encrypt($data, $key) {
    $ivLength = openssl_cipher_iv_length('AES-256-CBC');
    $iv = openssl_random_pseudo_bytes($ivLength);
    $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);
    return base64_encode($iv . $encrypted); // Store IV with encrypted data
}

//dencrypt users data
function decrypt($encryptedData, $key) {
    $encryptedData = base64_decode($encryptedData);
    $ivLength = openssl_cipher_iv_length('AES-256-CBC');
    $iv = substr($encryptedData, 0, $ivLength);
    $encrypted = substr($encryptedData, $ivLength);
    return openssl_decrypt($encrypted, 'AES-256-CBC', $key, 0, $iv);
}

?>