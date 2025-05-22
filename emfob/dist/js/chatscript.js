var chatConversationCache = '';
let timeoutId = null;
function DisplayChatMessages(id,type=''){
	$("#userChatArea,#userChatMessageArea,#sendmessage").show();
	$("#sendgroupmessage").hide();
	$("#recentMessageId").val(id);
	$("#chatConversations").html('');
	let timestamp = Date.now();
	if (timeoutId == null) {
		timeoutId = setInterval(loadChat, 10000);
	}
	if(type == 'group'){
		DisplayGroupChatMessage();
		return;
	}
	
	$.ajax({
		url: "api/getAllOnlineCmpyDetails.php" + "?user_id=" + id+"&timestamp="+timestamp,
		method: 'GET',
		success: function(data) {
			
			var resp = data['data'];
			
			if(data['data'].length == 0){
				var noChats = `
							<li>
								<div class="conversation-list"> No Chats yet
								</div>
							</li>
							`;
				$("#chatConversations").html(noChats);
			}
			else{
				
				for(var i=0;i<resp.length;i++){
					//username
					$("#useridVal").val(id);
					var username = resp[i]['email'].split("@"); 
					
					if(resp[i]['userid_from'] == USER_ID){
						username = resp[i]['emailto'].split("@");
					}
					
					$("#username").html(username[0]);
					if(data['is_online'] == 1)
						$("#onlinestatus").html('<i class="mdi mdi-circle text-success align-middle me-1"></i> Active Now') ;
					else
						$("#onlinestatus").html('<i class="mdi mdi-circle text-secondary align-middle me-1"></i> Offline') ;
					if(data['ismessaged'] == 'no'){
						var noChats = `<li>
										<div class="conversation-list">No Chats yet</div>
									   </li>
									  `;
						$("#chatConversations").html(noChats);
					}
					else{
						var html = '';
						for(var i=0;i<resp.length;i++){
							var createdAt = resp[i].created_at.split(" ");
							createdAt = createdAt[1].substring(0,5);
							var email = resp[i].email.split("@");
							
							const readable = timeAgo(resp[i].created_at);
							
							if(resp[i].userid_from == USER_ID){
								html += `<li>
											<div class="conversation-list">
												<div class="chat-avatar">
													<img src="${BASE_URL_ADMIN}assets/images/users/avatar-6.png" alt="avatar-2">
												</div>
												<div class="ctext-wrap">
													<div class="conversation-name">${email[0]}</div>
													<div class="chat-bubble chat-bubble-primary">
														<p class="mb-0">
															${resp[i].message}
														</p>
													</div>
													<p class="chat-time mb-0"><i
															class="mdi mdi-clock-outline align-middle me-1"></i> ${readable}
													</p>
												</div>
											</div>
										</li>`;
							}
							else{
								html += `<li class="right">
											<div class="conversation-list">
												<div class="chat-avatar">
													<img src="${BASE_URL_ADMIN}assets/images/users/avatar-6.png" alt="avatar-2">
												</div>
												<div class="ctext-wrap">
													<div class="conversation-name">${email[0]}</div>
													<div class="chat-bubble chat-bubble-primary">
														<p class="mb-0">
															${resp[i].message}
														</p>
													</div>
													<p class="chat-time mb-0"><i
															class="mdi mdi-clock-outline align-middle me-1"></i> ${readable}
													</p>
												</div>
											</div>
										</li>`;
							}
						}
						$("#chatConversations").html(html);
						scrollToBottom();
					}
				}
			}
		},
		error: function(err) {
			console.error('Error:', err);
		}
	});
}
$(document).ready(function(){
	getRecentMessageList(USER_ID);
	$('#searchChatList').on('input', function(e) {
		var inputValue = $(this).val();
		 $.ajax({
			url: "api/getChatList.php?q=" + inputValue,
			method: 'GET',
			success: function(data) {
				$("#chatListArea").html('');
				var html = '';
				if(data.length == 0){
					html +=`<div class="user-img ${data[i]['user_id']} align-self-center">
									No Users available
								</div>`
				}
				else{
					for(var i=0;i<data.length;i++){
						var email = data[i].email.split("@");
						email = email[0].substr(0,1);
						var status;
						if(data[i]['is_online'] == 1)
							status = "online";
						else
							status = "offline";
						html +=`<div onclick="DisplayChatMessages('${data[i]['user_id']}')" class="user-img ${status} align-self-center">
									<div class="avatar-2xs avatar avatar-circle align-self-center">
										<span class="bg-light text-body" alt="avatar-2">
											${email}
										</span>
									</div>
									<span class="user-status"></span>
								</div>`
					}
				}
				console.log(html);
				$("#chatListArea").html(html);
				
			},
			error: function(err) {
				console.error('Error:', err);
			}
		});
	});
	
	$("#chatTextMessage").keydown(function(event) {
		if (event.key === "Enter") {
			sendMessage();
		}
	});
});
function sendMessage(){
	id = $("#useridVal").val();
	$("#useridVal").val('');
	message = $("#chatTextMessage").val();
	$("#chatTextMessage").val('');
	$.ajax({
		url: "api/sendMessageToUser.php" + "?user_id=" + id+"&message="+message,
		method: 'GET',
		success: function(data) {
			DisplayChatMessages($userid);
		},
		error: function(err) {
			console.error('Error:', err);
		}
	});
}
function loadChat(){
	var id = $("#recentMessageId").val();
	DisplayChatMessages(id);
}
function scrollToBottom() {
	const chatBox = document.getElementById("chatConversations");
	chatBox.scrollTop = chatBox.scrollHeight;	
	window.scrollTo({
	  top: document.body.scrollHeight,
	  behavior: 'smooth'
	});
}
function timeAgo(date) {
	const seconds = Math.floor((new Date() - new Date(date)) / 1000);
	if (seconds < 60) return "just now";
	const minutes = Math.floor(seconds / 60);
	if (minutes < 60) return `${minutes} minute${minutes !== 1 ? 's' : ''} ago`;
	const hours = Math.floor(minutes / 60);
	if (hours < 24) return `${hours} hour${hours !== 1 ? 's' : ''} ago`;
	const days = Math.floor(hours / 24);
	return `${days} day${days !== 1 ? 's' : ''} ago`;
}
function getRecentMessageList(id){
	$.ajax({
		url: "api/getAllRecentChat.php?user_id=" + id,
		method: 'GET',
		success: function(data) {
			var html = '';
			if(data.length == 0){
				html += `<li class="active">
											<a href="#">
												<div class="d-flex">
													<div class="user-img online align-self-center me-3">
													No Chat messages to show
													</div>
												</div>
											</a>
										</li>`;
			}
			else{
				for(var i=0;i<data.length;i++){
					var email = '';
					var chatID = data[i]['userid_from'];
					email = data[i].emailfrom.split("@");
					if(data[i]['userid_from'] == id){
						email = data[i].emailto.split("@");
						chatID = data[i]['userid_to'];
					}
					
					html += `<li class="active" onclick="DisplayChatMessages('${chatID}')">
														<a href="#">
															<div class="d-flex">
																<div class="user-img online align-self-center me-3">
																	<img src="${BASE_URL_ADMIN}assets/images/users/avatar-6.png"
																		class="rounded-circle avatar-2xs avatar" alt="avatar-2">
																	<span class="user-status"></span>
																</div>
																<div class="flex-1 overflow-hidden">
																	<h5 class="text-truncate text-capitalize fs-14 mb-1">${email[0]}</h5>
																	<p class="text-truncate mb-0">${data[i]['message']}</p>
																</div>
																<div>
																	<p class="fs-11 mb-0">04 min</p>
																	<div><i
																			class="mdi mdi-check-all align-middle ms-2 text-info"></i>
																	</div>
																</div>
															</div>
														</a>
													</li>`;
				}
			}
			$("#recentChatList").html(html);
		},
		error: function(err) {
			console.error('Error:', err);
		}
	});
}
function saveGroup(){
	$('.error').each(function(index, element) {
		element.innerHTML = '';
	})
	var groupname = document.getElementById('groupname').value;
	var addPeople = document.getElementById('addPeople').value;
	
	if(groupname == ''){
		document.getElementById('groupnameErr').innerHTML = "Please enter Group Name";
	}
	if(addPeople == ''){
		document.getElementById('addPeopleErr').innerHTML = "Please select Group Person";
	}
	const select = document.getElementById('addPeople');
	const selected = Array.from(select.selectedOptions).map(option => option.value);
	if(selected.length > 3){
		document.getElementById('addPeopleErr').innerHTML = "Please select only 3 peoples";
	}
	
	const formData = new FormData();
	formData.append('groupname', groupname);
	formData.append('addPeople', selected.join("#"));
	
	$("#modelResult").removeClass('text-primary');
	$("#modelResult").removeClass('error');
	fetch(BASE_URL_ADMIN+'backend/save-group.php', {
	  method: 'POST',
	  body: formData
	})
	.then(response => response.json())
	.then(data => {
		if(data.code == 1){
			//uploading additional job details
			$("#modelResult").addClass('text-primary');
			$("#modelResult").html(data.result);
			$('#groupname,#addPeople').val('');
		}
		else{
			$("#modelResult").addClass('error');
			$("#modelResult").html(data.result);
		}
	})
	.catch(error => {
		console.error('Error:', error);
	});
}

let timeoutId1 = null;
//Load all the group chat messages
function DisplayGroupChatMessage(id){
	$("#userChatArea,#userChatMessageArea,#sendgroupmessage").show();
	$("#sendmessage").hide();
	$("#recentMessageId").val(id);
	$("#chatConversations").html('');
	if (timeoutId1 == null) {
		timeoutId1 = setInterval(loadChat1, 10000);
	}
	$.ajax({
		url: "api/getAllGroupChatDetails.php" + "?group_id=" + id,
		method: 'GET',
		success: function(data) {
			
			var resp = data;
			
			if(data['data'].length == 0){
				var noChats = `
							<li>
								<div class="conversation-list"> No Chats yet
								</div>
							</li>
							`;
				$("#chatConversations").html(noChats);
				$("#username").html(resp['group_name']);
				$("#onlinestatus").html('');
			}
			else{
				var html = '';
				resp = data['data'];
				for(var i=0;i<resp.length;i++){
					var createdAt = resp[i].created_at.split(" ");
					createdAt = createdAt[1].substring(0,5);
					var email = resp[i].email.split("@");
					
					$("#username").html(resp[i]['group_name']);
					
					const readable = timeAgo(resp[i].created_at);
					
					if(resp[i].userid_from == USER_ID){
						html += `<li>
									<div class="conversation-list">
										<div class="chat-avatar">
											<img src="${BASE_URL_ADMIN}assets/images/users/avatar-6.png" alt="avatar-2">
										</div>
										<div class="ctext-wrap">
											<div class="conversation-name">${email[0]}</div>
											<div class="chat-bubble chat-bubble-primary">
												<p class="mb-0">
													${resp[i].message}
												</p>
											</div>
											<p class="chat-time mb-0"><i
													class="mdi mdi-clock-outline align-middle me-1"></i> ${readable}
											</p>
										</div>
									</div>
								</li>`;
					}
					else{
						html += `<li class="right">
									<div class="conversation-list">
										<div class="chat-avatar">
											<img src="${BASE_URL_ADMIN}assets/images/users/avatar-6.png" alt="avatar-2">
										</div>
										<div class="ctext-wrap">
											<div class="conversation-name">${email[0]}</div>
											<div class="chat-bubble chat-bubble-primary">
												<p class="mb-0">
													${resp[i].message}
												</p>
											</div>
											<p class="chat-time mb-0"><i
													class="mdi mdi-clock-outline align-middle me-1"></i> ${readable}
											</p>
										</div>
									</div>
								</li>`;
					}
				}
				$("#chatConversations").html(html);
				scrollToBottom();
			}
		}
	});
}
function loadChat1(){
	var id = $("#recentMessageId").val();
	DisplayGroupChatMessage(id);
}
function sendGroupMessage(){
	var id = $("#recentMessageId").val();
	$("#useridVal").val('');
	message = $("#chatTextMessage").val();
	$("#chatTextMessage").val('');
	$.ajax({
		url: "api/sendMessageToGroup.php" + "?user_idfrom="+ USER_ID +"&group_id=" + id +"&message=" +message,
		method: 'GET',
		success: function(data) {
			DisplayGroupChatMessage($userid);
		},
		error: function(err) {
			console.error('Error:', err);
		}
	});
}