<?php 
session_start();


isset($_SESSION["user"]) ? die(header("location:".$base_url.'/dashboard')) : "";


$csrf = mt_rand(154397268156374,9999999999999999);

$_SESSION["csrf"] = $csrf;


require_once("./libs/header.php");
require_once("./libs/Db.php");



$footer_login = true;
?>



<script src="./js/login.js"></script>



	
	
	
<main class="mb-4">
	
	
	<section class="my-5">
	
	
		<div class="container">
		
			<div class="row justify-content-center">
			
			
				<div class="col-md-4 shadow-sm rounded bg-light ">
					
					<form class="form" name="login" method="post" action="<?php echo $base_url .'/checkcaptcha' ; ?>">
						<div class="col-12">
							<div class="col-12 pt-3">
								<div class="text-center alert alert-warning" id="false_captcha" style="display:none">کد تصویر صحیح نیست</div>
								<div class="text-center alert alert-warning" id="empty_captcha" style="display:none">کد تصویر را وارد کنید</div>
								<div class="text-center alert alert-danger" id="false_csrf" style="display:none">این نشست وجود نداشته یا باطل شده است</div>
								<div class="text-center alert alert-danger" id="empty_user" style="display:none">نام کاربری نباید خالی باشد</div>
								<div class="text-center alert alert-danger" id="empty_password" style="display:none" onblur="checkPassword(this.value)">رمز عبور نباید خالی باشد</div>
								<div class="text-center alert alert-danger" id="false_login" style="display:none">نام کاربری یا رمز عبور نادرست</div>
								<input type="text" name="username" placeholder="نام کاربری" class="form-control rounded-pill" id="user" onblur = "check()"required>
								<input type="password" name="password" placeholder="رمز عبور" class="form-control my-3 rounded-pill" id="password" onblur = "check()" required>
							</div>
							<div class="row col-12 align-items-center justify-content-center">
								
								<div class="col-6">
									<img src="<?php echo $base_url.'/captcha.php' ; ?>" class="img-thumbnail" alt="captcha">
								</div>
								
							
								<div class="col-6">
									<input type="text" name="captcha" placeholder="کد سمت راست" class="form-control rounded-pill" id="captcha" onblur="check" required>
								</div>
								<input type="hidden" name="csrf" value="<?php echo $csrf; ?>">
								
								
							
							</div>
							
							
						</div>
						
						<div class="col-12 text-center my-3">
							
							<div class="col-auto">
								<button type="submit" name="btnLogin" value="login" class="w-45 btn btn-primary">ورود</button>
							</div>
						</div>
					
					
					
					
					
					
					
					</form>
				
				
			
				</div>
			
			
			
			
			</div>
		
		
		
		
		
		
		</div>
	
	
	</section>
	
	
	
  
</main> 
  














</main>














<?php 


require_once("./libs/footer.php");

?>