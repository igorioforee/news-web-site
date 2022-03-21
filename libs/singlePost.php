<?php



 require_once("./libs/header.php");
 require_once("./libs/Db.php");
 require_once("./libs/baseurl.php");
 

 

?>







<main >

<section class="container">
	<section class="row bg-light">
	
		
	
	
<?php



 $db = new Db;

 $post = $db->singlepost($post_id);
 
 
 
 if($post){ ?>
	 
	
			<div class="row align-items-center justify-content-around">
        
                <div class="col-md-8">
        
					<div class="row g-0   rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
                
                
                    
						<div class="col-6 d-none d-lg-block">
						<?php if(isset($post["image"])){if(!empty($post["image"])){ ?><img src="<?php echo $post["image"] ; ?>" class="img-fluid h-100" alt="img"><?php }}?>
						</div>
										
						
						<div class=" col-6 d-flex flex-column p-5 px-2 position-static">
							<?php if(isset($post["title"])){if(!empty($post["title"])){ ?><h4 class=""><?php echo $post["title"] ?></h4><?php }}?>
							<?php if(isset($post["time"])){if(!empty($post["time"])){ ?><div class="mb-1 mt-2 text-muted"><?php echo $post["time"] ?></div><?php }}?>
							
							
							 <?php if(isset($post["text"])){if(!empty($post["text"])){ ?><p class="card-text text-justify mb-auto">
							 <?php echo $post["text"] ?></p>
							 
							 
							 
							 
							 
							 
							 <?php }}?>
							
						</div>
						
						
					</div>
						
                
                
                </div>
                
                
                
            
            
            
			</div>
		
	 
	 
	 
	 
<?php  } ?>








<?php
 if($post == false){ echo '
	<div class="col mt-5">
		<div class="col text-center">
		
			<p class="p-5 display-5"> چنین پستی وجود ندارد  :/</p>
		
		</div>
	
	
	
	</div>
';
 }
 
 ?>
	
	
	
	
	
	
	</section>















</section>

















</main>






















<?php


require_once("./libs/footer.php");



?>