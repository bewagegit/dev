/*
Template Name: Emfob-  Admin & Dashboard Template
Author: Emfob
File: Session Timeout Js File
*/

$.sessionTimeout({
	keepAliveUrl: 'pages-starter.php',
	logoutButton:'Logout',
	logoutUrl: 'auth-login.php',
	redirUrl: 'auth-lock-screen.php',
	warnAfter: 3000,
	redirAfter: 30000,
	countdownMessage: 'Redirecting in {timer} seconds.'
});