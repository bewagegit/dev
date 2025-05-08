//All common jQuery and javascript function

function restrictNumbers(restrictNo){
	$(restrictNo).on('keydown', function(e) {
		// Ensure it's a number key (0–9 on main keyboard or numpad)
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) &&
			(e.keyCode < 96 || e.keyCode > 105)) {
			// Allow: backspace (8), delete (46)
			if (e.keyCode === 8 || e.keyCode === 46) {
			  return;
			}

			// Allow number keys (0–9) on main keyboard
			if (e.keyCode >= 48 && e.keyCode <= 57 && !e.shiftKey) {
			  return;
			}

			// Allow number keys (0–9) on numeric keypad
			if (e.keyCode >= 96 && e.keyCode <= 105) {
			  return;
			}

			// Block all other keys
			e.preventDefault();
		}
	});
}

function clearHtmlError(array){
	
	$('.error').each(function(index, element) {
		element.innerHTML = '';
	})
}

	
//1 :  number, 2  : valid url,  3 : valid email
function chkValidInput(array,type){
	for (var obj in array) {
		var tmp = document.getElementById(obj).value;
		
		if(type == 0){
			if(tmp == ''){
				document.getElementById(obj+"Err").innerHTML = 'Please enter '+array[obj];
			}
		}
		if(type == 1){
			if(tmp != '' && isNaN(tmp) ){
				document.getElementById(obj+"Err").innerHTML = 'Please enter valid '+array[obj];
			}
		}
		else if(type == 2){
			if(tmp != '' && !isValidURL(tmp) ){
				document.getElementById(obj+"Err").innerHTML = 'Please enter valid '+array[obj];
			}
		}
		else if(type == 3){
			if(tmp != '' && !isValidEmail(tmp) ){
				document.getElementById(obj+"Err").innerHTML = 'Please enter valid '+array[obj];
			}
		}
	};
}

function isValidURL(string) {
	try {
		new URL(string);
		return true;
	} catch (_) {
		return false;
	}
}


function isValidEmail(email) {
	const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	return pattern.test(email);
}

document.addEventListener("DOMContentLoaded", () => {
  const tagContainer = document.getElementById("tag-container");
  const tagInput = document.getElementById("languagesSpoken");

  tagInput.addEventListener("keypress", function (e) {
    if (e.key === "Enter") {
      e.preventDefault();
      const tagText = tagInput.value.trim();
      if (tagText !== "") {
        addTag(tagText);
        tagInput.value = "";
      }
    }
  });

  tagContainer.addEventListener("click", function (e) {
    if (e.target.classList.contains("remove-tag")) {
      const tag = e.target.parentElement;
      tagContainer.removeChild(tag);
    }
  });

  function addTag(text) {
    const tag = document.createElement("span");
    tag.className = "tag";
    tag.innerHTML = `
      ${text}
      <span class="remove-tag">&times;</span>
    `;
    tagContainer.insertBefore(tag, tagInput);
  }
});