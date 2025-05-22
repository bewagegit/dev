keepLive();
setInterval(keepLive, 60000); // every 5 minutes
function keepLive(){
	console.log('keeplive');
	fetch(BASE_URL + 'api/keep-live.php');
}