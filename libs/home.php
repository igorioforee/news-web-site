
<?php
 require_once("./libs/header.php");
 require_once("./libs/Db.php");
 
 $db = new Db;
 
 $getPost = $db->adminReq("select * from posts order by id desc limit 0,1",true);
 
 $posts = $db->adminReq("select * from posts order by id desc limit 1,8",false);
 
 
 
 
 
 
 
 ?>





<main>


	<section class="my-5 container">
	
		
		
		
			<div class="row align-items-center justify-content-around">
        
                <div class="col-md-8">
        
					<div class="row g-0   rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
                
                
                    
						<div class="col-6 d-none d-lg-block">
						<?php if(isset($getPost["image"])){if(!empty($getPost["image"])){ ?><img src="<?php echo $getPost["image"] ; ?>" class="img-fluid h-100" alt="img"><?php }}?>
						</div>
										
						
						<div class=" col-6 d-flex flex-column p-5 px-2 position-static">
							<?php if(isset($getPost["title"])){if(!empty($getPost["title"])){ ?><h4 class=""><?php echo $getPost["title"] ?></h4><?php }}?>
							<?php if(isset($getPost["time"])){if(!empty($getPost["time"])){ ?><div class="mb-1 mt-2 text-muted"><?php echo $getPost["time"] ?></div><?php }}?>
							 <?php if(isset($getPost["text"])){if(!empty($getPost["text"])){ ?><p class="card-text text-justify mb-auto"><?php echo $getPost["text"] ?></p><?php }}?>
							
						</div>
						
						
					</div>
						
                
                
                </div>
                
                
                
            
            
            
			</div>
		
			
	
		
			
			
	
	
	
	
		
	
		</section>
		
		<section class="container">
			<section class="row">
				<div class="justify-content-around">
        
				
				
    <div class="container">
    
    
		<div class="row align-items-center justify-content-around">
			
			<?php foreach($posts as $post):?>
			   <div class="col-md-6">
				
					<div class="row g-0  rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
						
						
						<?php if(isset($post["image"]) && !empty($post["image"])) { ?>
						<div class="col-6 d-none d-lg-block">
							<?php if(isset($post["image"])){if(!empty($post["image"])){ ?><img src="<?php echo $post["image"] ; ?>" class="img-fluid h-100" alt="img"><?php }}?>
							
						</div>
						<?php } ?>				
						
						
						
						<div class=" col-6 d-flex flex-column p-4 position-static">
							
							<?php if(isset($post["title"])){if(!empty($post["title"])){ ?><h5 class=""><em><?php echo $post["title"] ; ?></em></h5><?php }}?>
							<?php if(isset($post["time"])){if(!empty($post["time"])){ ?><div class="mb-1 mt-2 text-muted"><?php echo $post["time"] ; ?></div><?php }}?>
							<?php if(isset($post["text"])){if(!empty($post["text"])){ ?><p class="card-text text-justify mb-auto"><?php echo $post["text"]; ?></p><?php }}?>
							
						</div>
						
						
						
						
						
						
						
						
						
						
					</div>
					
				
				</div>
					
				
                <?php endforeach;        ?>
                
                
            
               
               
			
                
                
                
				
				
				
				
				
	    </div>
            
            
    </div>
            
            
			</div>
		
			
			
			
			
			
			
			
			</section>
		
		
		
		
		
		
		
		
		</section>
	
	
	
	
	
	
	
	
	
	
	
	
	








</main>





<?php require_once("./libs/footer.php");?>

