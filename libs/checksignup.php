<?php 

session_start();
require_once("./libs/baseurl.php");
require_once("./libs/Db.php");



if(isset($_POST["btnLogin"])){
	
	isset($_POST["username"]) && !empty($_POST["password"]) ?: die(header("location:".$base_url));
	isset($_POST["captcha"]) && !empty($_POST["captcha"]) ?: die(header("location:".$base_url));
	isset($_POST["password"]) && !empty($_POST["password"]) ?: die(header("location:".$base_url));
	isset($_POST["re_password"]) && !empty($_POST["re_password"]) ?: die(header("location:".$base_url));
	
	
	$_POST["captcha"] == $_SESSION["captcha"] ?: die(header("location:".$base_url.'/signup?false_captcha'));
	$_SESSION["captcha"] = "";
	$_POST["csrf"] == $_SESSION["csrf"] ?: die(header("location:".$base_url.'/signup?false_csrf'));
	define('username',htmlspecialchars($_POST["username"]));
	define('password',htmlspecialchars($_POST["password"]));
	
	$db = new Db;
	$db->checkUserExists(username)? die(header("location:".$base_url.'/signup?user_exists')) : "";
	
	if(strlen(password) >= 8 && strlen(password) <= 40 ){
		
	}
	else{
		die(header("location:".$base_url.'/signup?len_pass'));
	}
	
	
	$_POST["re_password"] == $_POST["password"] ?: die(header("location:".$base_url.'/signup?not_equal_passwords'));
	
	if(strlen(username) >= 4 && strlen(username) <= 40 ){
		
	}
	else{
		die(header("location:".$base_url.'/signup?len_user'));
	}
	
	$signUpReq = $db->signUpReq(username,password);
	if($signUpReq){
		require_once("./libs/signupSuccess.php");
	}
	else{
		die("502 bad gateway!");
	}
	
	
	
	
	
	
	
}
else{
	die(header("location:".$base_url));
}







