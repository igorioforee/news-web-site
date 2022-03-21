<?php 

session_start();
require_once("./libs/baseurl.php");
require_once("./libs/Db.php");



if(isset($_POST["btnLogin"])){
	
	isset($_POST["username"]) && !empty($_POST["password"]) ?: die(header("location:".$base_url));
	isset($_POST["captcha"]) && !empty($_POST["captcha"]) ?: die(header("location:".$base_url));
	isset($_POST["password"]) && !empty($_POST["password"]) ?: die(header("location:".$base_url));
	
	$_POST["captcha"] == $_SESSION["captcha"] ?: die(header("location:".$base_url.'/login?false_captcha'));
	$_POST["csrf"] == $_SESSION["csrf"] ?: die(header("location:".$base_url.'/login?false_csrf'));
	define('username',htmlspecialchars($_POST["username"]));
	define('password',htmlspecialchars($_POST["password"]));
	$db = new Db;
	if($db->userCheck(username,password)){
		$_SESSION["user"] = username ;
		die(header("location:".$base_url.'/dashboard'));
	}
	else{
		die(header("location:".$base_url.'/login?false_login'));
	}
	
	
	
}
else{
	die(header("location:".$base_url));
}

