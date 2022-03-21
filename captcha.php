<?php
session_start();


class Captcha{
	
	
	
	
	public function makeCaptchaImage():void{
		$this->captcha = "";
		
		$font = "../font1.TTF";
		$img = imagecreate(140,50);
		imagecolorallocate($img,0,0,0);
		
		
		
		$p = 0;
		for($i=0;$i<5;$i++){
			$textColor = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			$p += 25 ;
			$num = mt_rand(0,9);
		imagefttext($img,17,mt_rand(12,76),$p,35,$textColor,$font,$num);
		$this->captcha .= $num;
		}
		imagejpeg($img);
		imagedestroy($img);
		$_SESSION["captcha"] = $this->captcha ;
		header("Content-Type: image/jpeg");
		
	}
	



}



(new Captcha);
(new Captcha)->makeCaptchaImage();



?>