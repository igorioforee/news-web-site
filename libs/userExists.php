<?php 



?>




					<form class="form py-5" name="userExists" method="post" action="<?php echo $base_url .'/checkUserExists' ; ?>">
						<div class="col-12">
							<div class="col-12">
								<?php if(isset($_GET["false_captcha_userExists"])){ ?><div class="text-center alert alert-warning">کد تصویر صحیح نیست</div><?php }?>
								<?php if(isset($_GET["false_user_exists"])){ ?><div class="text-center alert alert-warning">این نام کاربری قبلا وجود داشته</div><?php }?>
								
								<?php if(isset($_GET["true_user"])){ ?><div class="text-center alert alert-warning">تبریک! می توانید این نام کاربری را انتخاب کنید</div><?php }?>
								
								<?php if(isset($_GET["len_user_exists"])){ ?><div class="text-center alert alert-warning">نام کاربری حداقل باید 4 کاراکتر یا بیشتر و نهایت 40 کارکتر باشد.</div><?php }?>
								
								
								
								
								<input type="text" name="username_check" placeholder="نام کاربری دلخواه" class="form-control" required>
								
							</div>
							<div class="row col-12 align-items-center justify-content-center py-4">
								
								<div class="col-6">
									<img src="<?php echo $base_url.'/captchaUserExists.php' ; ?>" class="img-thumbnail" alt="captcha">
								</div>
								
							
								<div class="col-6">
									<input type="text" name="captcha_userExists" placeholder="کد سمت راست" class="form-control" required>
								</div>
								
								
								
							
							</div>
							
							
						</div>
						
						<div class="col-12 text-center my-3">
							
							<div class="col-auto">
								<button type="submit" name="btnUserExists" value="login" class="w-45 btn btn-outline-success">برسی</button>
							</div>
						</div>
					
					
					
					
					
					
					
					</form>
				