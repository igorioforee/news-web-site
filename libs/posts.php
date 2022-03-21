
<?php
 require_once("./libs/header.php");
 require_once("./libs/Db.php");
 
 
 $db = new Db;
 

 $first_page = 1 ; 
 
 
 $total_page = $db->adminReq("select count(id) from posts",true);
 $total_page = ceil(((int)$total_page["count(id)"])/10) ; 

$page_id = isset($page_id) ? $page_id : 1 ;
$page_id = (int)$page_id;



if($page_id > $total_page || $page_id <= 0){
	
	die(header("location:".$base_url."/posts/1"));
}




$reqPost = (($page_id*10)-10);


$posts = $db->GetAllPost($reqPost);


 
 
 
 ?>





<main>


		<section class="container my-4">
		
			<section class="row justify-content-center">
			
				<div class="col-md-4">
				
				
				<?php require_once("./libs/pagination.php"); ?>
				
				
				
				
				</div>
			
			
			
			
			
			
			</section>
		
		
		
		
		
		
		
		
		</section>


		<section class="container">
			<section class="row">
				<div class="justify-content-around">
        
				
				
    <div class="container">
    
    
		<div class="row align-items-center justify-content-around">
			
			<?php 
			
			if($posts){
			foreach($posts as $post):?>
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
					
				
			<?php endforeach;  }      ?>
                
                
            
               
               
			
                
                
                
				
				
				
				
				
	    </div>
            
            
    </div>
            
            
			</div>
		
			
			
			
			
			
			
			
			</section>
		
		
		
		
		
		
		
		
		</section>
	
	
	
	
	
	
	
	
	
	
	
	
	








</main>





<?php require_once("./libs/footer.php");?>

