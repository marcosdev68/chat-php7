// Function for reload Chat Page
function reloadPage(){
	var req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(req.readyState == 4 && req.status == 200){
			document.getElementById('chat').innerHTML = req.responseText;
		}
	}

		req.open('GET', 'view/chat.php', true);
		req.send();
	}

setInterval(function(){reloadPage();}, 1000);

// Function for show form of Register
function showRegister() {
	$('#register').fadeIn(); 
	$('#login').hide();
}

// Function for Hide form of Register

function hideRegister() {
	$('#login').fadeIn(); 
	$('#register').hide();
}