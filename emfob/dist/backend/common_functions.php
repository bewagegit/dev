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

function getAllChatList($userid,$query=''){
	global $pdo;

	if($_SESSION['user_type'] ==2)
		$usertype = 1;
	if($_SESSION['user_type'] ==1)
		$usertype = 2;
	
	$qry = '';
	if($query != '')
		$qry = " and b.full_name like '%".$query."%' ";
	// Fetch available chat List
	$sql = "SELECT * FROM `".USERS."` a
		LEFT JOIN `".CANDIDATES_PROFILES."` b on a.user_id = b.user_id
		WHERE a.`user_type` = $usertype  and a.user_id !='".$userid."' $qry order by a.user_id desc limit 0,5 ";	
	$stmt = $pdo->query($sql);
	$chatList = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $chatList;
}

function getPaginationLinks($pagelimit,$total){
	$preDisabled = '';
	$url = '#';
	if(!isset($pagelimit) || $pagelimit == 1 ){
		$preDisabled = ' class="disabled" ';
	}else{
		$url = BASE_URL."job_list.php?pagelimit=".($pagelimit -1);
	}
	
	$links = '';
	for ($i = 1; $i <= $total; $i++){
		$activeClass = '';
		if(!isset($pagelimit) && $i == 1){
			$activeClass = ' class="active" ';
		}
		if(isset($pagelimit) && $i == $pagelimit){
			$activeClass = ' class="active" ';
		}
		$href = BASE_URL."job_list.php?pagelimit=".$i;
		$links .= '<li '.$activeClass.'><a href="'.$href.'">'.$i.'</a></li>';
	}
	
	$lastDisabled = $urlLast = '';
	
	if(!isset($pagelimit) || $pagelimit == $total ){
		$lastDisabled = ' class="disabled" ';
		$urlLast =  '#';
	}
	else{
		$urlLast = BASE_URL."job_list.php?pagelimit=".($pagelimit + 1);
	}
	$html = '<ul class="pagination">
			<li '.$preDisabled.'><a href="'.$url.'">&laquo;</a></li>'.$links.'
			<li '.$lastDisabled.'><a href="'.$urlLast.'">&raquo;</a></li>
		  </ul>
		';
	return $html;	
}

?>