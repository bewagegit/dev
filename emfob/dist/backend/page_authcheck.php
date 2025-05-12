<?php
if(!isset($_SESSION['user_id'])){
	//redirect('sign-in.php');
	header('Location: sign-in.php');
}
?>