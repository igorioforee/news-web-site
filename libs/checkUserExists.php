<?php 

session_start();
require_once("./libs/baseurl.php");
require_once("./libs/Db.php");



if(isset($_POST["btnUserExists"])){
	
	isset($_POST["username"]) && !empty($_POST["username"]) ?: die(header("location:".$base_url));

	
	
	
	define('username',htmlspecialchars($_POST["username"])); //len_user_exists
	
	
	
	$db = new Db;
	$db->checkUserExists(username)? die("user_exists") : die("user_not_exists");
	
	
	
	
	
	
	
	
}
else{
	die(header("location:".$base_url));
}

