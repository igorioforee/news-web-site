

<?php 




?>


						<script src="<?php echo $base_url.'/js/signup.js' ; ?>"></script>
						<form class="form" name="login" method="post" action="<?php echo $base_url .'/checksignup' ; ?>">
							<div class="col-12">
								<div class="col-12">
									<?php if(isset($_GET["false_captcha"])){ ?><div class="text-center alert alert-warning">کد تصویر صحیح نیست</div><?php }?>
									<?php if(isset($_GET["false_csrf"])){ ?><div class="text-center alert alert-danger">این نشست وجود نداشته یا باطل شده است</div><?php }?>
									<div class="text-center alert alert-danger" id="user_exists" style="display:none">این نام کاربری قبلا وجود داشته</div>
									
									
									<div class="text-center alert alert-danger" id="passLen" style="display:none">پسورد باید حداقل 8 کاراکتر و حداکثر 40 کاراکتر باشد</div>
									<div class="text-center alert alert-danger" id = "userLen" style="display:none">نام کاربری باید حداقل دارای 4 کاراکتر و حداکثر 40 کاراکتر باشد</div>
									
									<div class="text-center alert alert-danger" style="display:none" id="EqualPass_">پسورد و تکرار آن باید یکی باشد</div>
									
									
									<input type="text" name="username" id="username" placeholder="نام کاربری" class="form-control rounded-pill" onblur="checkUser(this)" required>
									<input type="password" name="password" placeholder="رمز عبور" class="form-control my-3 rounded-pill" id="password" onblur ="checkPassword(this.value)" required>
									<input type="password" name="re_password" placeholder="تکرار رمز عبور" class="form-control my-3 rounded-pill" id="re_password" onblur="checkEqualPasswords()" required>
								</div>
								<div class="row col-12 align-items-center justify-content-center">
									
									<div class="col-6">
										<img src="<?php echo $base_url.'/captcha.php' ; ?>" class="img-thumbnail" alt="captcha">
									</div>
									
								
									<div class="col-6">
										<input type="text" name="captcha" placeholder="کد سمت راست" class="form-control rounded-pill" required>
									</div>
									<input type="hidden" name="csrf" value="<?php echo $csrf; ?>">
									
									
								
								</div>
								
								
							</div>
							
							<div class="col-12 text-center my-3">
								
								<div class="col-auto">
									<button type="submit" name="btnLogin" value="login" class="w-45 btn btn-success rounded-pill">عضویت</button>
								</div>
							</div>
						
						
						
						
						
						
						
						</form>
					
					