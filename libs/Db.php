<?php


class Db {
	
	
	function __construct(){
		try{
		$this->pdo = new PDO("mysql:host=localhost;dbname=1","root","");
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $msg){
			die("Connection Error.");
		}
		
	}
	
	
	
	
	
	public function adminReq($query=null,bool $one){
		
		if(isset($query)){
			
			$req = $this->pdo->prepare($query);
			$req->execute();
			
			
			if($req->rowCount() > 0){
			$fetch = $req->fetchAll();
			
			
			return $one ? $fetch[0] : $fetch ; 
			}
			else 
				return false;
			
				
			
			
			
		}
		else
			die("query required");
		
		
		
		
	}
	
	public function adminDo($query=null){
		
		if(isset($query)){
			
			$req = $this->pdo->prepare($query);
			$req->execute();
			
			
			if($req->rowCount() > 0){
			
			
			
			 return true;
			}
			else 
				return false;
			
				
			
			
			
		}
		else
			die("query required");
		
		
		
	}
	
	public function singlePost($post_id){
		
		$query = $this->pdo->prepare("select * from posts where id = :post_id");
		
		$query->bindValue(":post_id",$post_id);
		
		$query->execute();
		
		if($query->rowCount() > 0){
			$res = $query->fetchAll();
			
			return $res[0];
			
		}
		return false;
		
	}
	
	
	public function signUpReq($username,$password){
		
		
	$signUpReq = $this->pdo->prepare("INSERT INTO `users`(`username`,`password`)VALUES(:username,:password)");
	$signUpReq->bindValue(":username",$username,PDO::PARAM_STR);
	$signUpReq->bindValue(":password",$password,PDO::PARAM_STR);
	$signUpReq->execute();
	
	if($signUpReq->rowCount() >0){
		return true;
	}
	else{
		return false ; 
	}
	
	}
	
	
	
	
	public function GetAllPost($req=null){
	   
		
		
		$res = $this->pdo->prepare("select * from posts order by id desc limit :num,10");
		
		$res->bindValue(":num",$req,PDO::PARAM_INT);
		
		$res->execute();
		
		if($res->rowCount() > 0){
			
			return $res->fetchAll();
		}
		else{
			return false;
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	public function getMaxPostId(){
		
		$query = $this->pdo->prepare("select * from posts  order by id desc  limit 0,1");
		
		$query->execute();
		
		if($query->rowCount() > 0){
			$res = $query->fetchAll();
			
			return $res[0]['id'];
			
		}
		return false;
		
	}
	
	
	
	
	public function userCheck($username,$password){
		
		$query = $this->pdo->prepare("select `username`,`password` from `users`  where `username` = :username and `password`= :password");
		
		$query->bindValue(":username",$username);
		$query->bindValue(":password",$password);
		$query->execute();
		
		if($query->rowCount() > 0){
			return true;
			
		}
		return false;
		
	}
	
	
	public function checkUserExists($username){
		
		$query = $this->pdo->prepare("select `username` from `users`  where `username` = :username");
		
		$query->bindValue(":username",$username);
		$query->execute();
		
		if($query->rowCount() > 0){
			return true;
			
		}
		return false;
		
	}
	
	public function search($reqNum=null,$value=null){
		
		if(isset($reqNum) && isset($value)){
			$reqNum = (string)$reqNum;
			$searchQuery = "SELECT * FROM `posts` WHERE  `text` LIKE '%:value%' LIMIT :num,10";
			$query = $this->pdo->prepare($searchQuery);
			$query->bindValue(":value",$value,PDO::PARAM_STR);
			$query->bindValue(":num",$reqNum,PDO::PARAM_STR);
			$query->execute();
			if($query->rowCount()>0){
				$fetch = $query->fetchAll();
				
				return $fetch; 
			}
			else{
				return false;
			}
			
		}
		else{
			return false;
		}
		
	}
	
	public function Countsearch($reqNum=null,$value=null){
		
		if(isset($reqNum) && isset($value)){
			
			$searchQuery = "SELECT count(id) FROM `posts` WHERE  text LIKE '%:value%' LIMIT :num,10";
			$query = $this->pdo->prepare($searchQuery);
			$query->bindValue(":value",$value,PDO::PARAM_STR);
			$query->bindValue(":num",$reqNum,PDO::PARAM_STR);
			$query->execute();
			if($query->rowCount()>0){
				$fetch = $query->fetchAll();
				
				return $fetch[0]['count(id)']; 
			}
			else{
				return false;
			}
			
		}
		else{
			return false;
		}
		
	}
	
	
	
	
	
}



?>