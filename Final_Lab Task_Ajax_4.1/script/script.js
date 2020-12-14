"use strict"

function registration(){
	let name= document.getElementsByName('name').value;
    let id = document.getElementsByName('id').value;
    let password = document.getElementsByName('password').value;
    let cpassword = document.getElementsByName('cpassword').value;
    let email = document.getElementsByName('email').value;
    let userType = document.getElementsByName('userType').value;
    
    var data = new FormData();
    data.append('name', name);
    data.append('id', id);
    data.append('password', password);
    data.append('cpassword', cpassword);
    data.append('email', email);
    data.append('userType', userType);

	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../controller/register.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.onreadystatechange = function(){
		
		if (this.readyState == 4 && this.status == 200) {
	    	document.getElementById('result').innerHTML = this.responseText;
	    }
	}
	
	xhttp.send(data);
}