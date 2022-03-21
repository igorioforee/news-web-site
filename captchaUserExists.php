<?php
session_start();


class Captcha{
	
	
	
	
	public function makeCaptchaImage():void{
		$this->captcha = "";
		
		//font
		$font = "../font1.TTF";
		
		
		//create a blank image
		$img = imagecreate(140,50);
		
		//set background
		imagecolorallocate($img,0,0,0);
		
		
		//make random number and add it to image
		$p = 0;
		for($i=0;$i<5;$i++){
			
			//set color of text
			$textColor = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			$p += 25 ;
			
			//making random number
			$num = mt_rand(0,9);
			
			//write random number in image
			imagefttext($img,17,mt_rand(12,76),$p,35,$textColor,$font,$num);
			
		//
			// if your host not supported iamgefttext php method you can use imagestring function
			//imagestring($img,17,$p,35,$num,$textColor);
			
			
			//add num to captcha
		$this->captcha .= $num;
		}
		//convert image to jpg
		imagejpeg($img);
		// empty memory
		imagedestroy($img);
		
		//set captcha value to session
		$_SESSION["captcha_userExists"] = $this->captcha ;
		
		//show image (:
		header("Content-Type: image/jpeg");
		
	}
	



}


// class captcha class -> to run...
(new Captcha);
(new Captcha)->makeCaptchaImage();



?>
