





function checkUser(reqUser){
	const reqValue = reqUser.value;
	
	if(reqValue !=  '' && reqValue.length > 4){
		
		xmlCon = new XMLHttpRequest();
		xmlCon.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				let rT = this.responseText;
				if(rT == "user_exists"){
					
					document.getElementById("username").classList.add("is-invalid");
					document.getElementById("user_exists").style.display = "block";
					document.getElementById("passLen").style.display = "none";
				}
				else{
					
					
					document.getElementById("username").classList.remove("is-invalid");
					document.getElementById("username").classList.add("is-valid");
					document.getElementById("user_exists").style.display = "none";
					document.getElementById("userLen").style.display = "none";
					
				}
			}
		};
		
		xmlCon.open("POST","checkUserExists");
		xmlCon.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlCon.send("btnUserExists=true&username="+reqValue);
		
	}
	if(reqValue.length <= 4){
		//
		document.getElementById("username").classList.add("is-invalid");
		document.getElementById("userLen").style.display = "block";
	}
	
	
	
}


function checkPassword(pass){
	
	if(pass.length >= 8 && pass.length <= 40){
		document.getElementById("passLen").style.display = "none";
		document.getElementById("password").classList.remove("is-invalid");
		document.getElementById("password").classList.add("is-valid");
		
		
		
		
	}
	else{
		pass_ = document.getElementById("passLen").style.display = "block";
		document.getElementById("password").classList.remove("is-valid");
		document.getElementById("password").classList.add("is-invalid");
	}
}

function checkEqualPasswords(){
	
	//re_password
	//password
	//EqualPass_
	pass = document.getElementById("password");
	re_pass = document.getElementById("re_password");
	Epass_div = document.getElementById("EqualPass_");
	
	if(pass.value != re_pass){
		
		Epass_div.style.display = "block";
		re_pass.classList.remove("is-valid");
		re_pass.classList.add("is-invalid");
	}
	if(pass.value != "" && pass.value == re_pass.value && re_pass.value.length >= 8 && re_pass.value.length <= 40 ){
		Epass_div.style.display = "none";
		re_pass.classList.remove("is-invalid");
		re_pass.classList.add("is-valid");
	}
	
	
	
}
