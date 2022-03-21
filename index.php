<?php 


require_once("./libs/baseurl.php");
require_once("./libs/Db.php");

$db = new Db;


isset($_GET["url"])  ?: die(require_once("./libs/home.php"));


//singlepost - posts/1

if(isset($_GET["url"]) && !empty($_GET["url"])){
	
	$url = $_GET["url"];
	
	$url = explode("/",$url);
	
	
	for($i = 0 ; $i < count($url) ; $i++){
		if(empty($url[$i])){
			unset($url[$i]) ;
		}
	}
	
	
	
	
	switch($url[0]){
		
		case "singlepost":
		
		if(isset($url[1])){
			$post_id = $url[1];
		}
		else{
			
			$max = $db->getMaxPostId();
			$post_id = $max ; 
		}
		
		
		require_once("./libs/singlePost.php");
		break;
		
		
		case "posts":
		if(isset($url[1])){
			$page_id = $url[1];
		}
		require_once("./libs/posts.php");
		break;
		
		case "login":
		 require_once("./libs/login.php");
		break;
		
		case "signup":
			require_once("./libs/signup.php");
		break;
		
		case "checkcaptcha":
		require_once("./libs/checkcaptcha.php");
		break;
		
		
		case "dashboard":
		require_once("./libs/dashboard.php");
		break;
		
		
		case "checksignup":
		require_once("./libs/checksignup.php");
		break;
		
		case "checkUserExists":
		require_once("./libs/checkUserExists.php");
		break;
		
		
		default:
		
		require_once("./libs/404.php");
		break;
		
	}
	
	
	
	
}
