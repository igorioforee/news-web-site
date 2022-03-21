<?php 
session_start();


isset($_SESSION["user"]) ? die(header("location:".$base_url.'/dashboard')) : "";


$csrf = mt_rand(154397268156374,9999999999999999);

$_SESSION["csrf"] = $csrf;


require_once("./libs/header.php");
require_once("./libs/Db.php");



$footer_login = true;
?>



<main>





	
	
	
<main >
	
	
	<section class="my-5">
	
	
		<div class="container">
		
			<div class="row justify-content-around align-items-center">
			
				
				
				<div class="col-md-4 ">
			
				
				
					<div class="card row py-4  shadow-sm bg-light">

						
							<h3 class="card-title text-center">عضویت</h3>
						
						
						<?php require_once("./libs/signupForm.php");?>
						
						
				
					</div>
				
				</div>
			
			
			</div>
		
		
		
		
		
		
		</div>
	
	
	</section>
	
	
	
  
</main> 
  














</main>














<?php 
$footer_login = false;

require_once("./libs/footer.php");

?>

