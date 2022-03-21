
<?php 

//isset ?s=  die("search");

require_once("./libs/baseurl.php");

$category = [
0 => "جنگ اوکراین",
1 => "نقد مقاله",
2 => "سایر"


];

$header = true;

if($header){
?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
	
    <meta name="description" content="Best News">
    <meta name="keywords" content="نقد مقاله, جنگ, جنگ اوکراین, اخبار جنگ اوکراین, حمله روسیه به اوکراین ">
    
    <meta http-equiv="content-language" content="fa">
    
    <link rel="apple-touch-icon" href="icon-180x180.png">
    <title>::News</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $base_url."/style/style.css" ; ?>">
    <title>News</title>
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<header class="mb-5 container">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">News</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-hover-aool active" aria-current="page" href="<?php echo $base_url; ?>">خانه</a>
        </li>
        <li class="nav-item nav-hover-aool">
          <a class="nav-link" href="<?php echo $base_url."/posts/1" ; ?>">همه پست ها</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            دسته بندی
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <?php foreach($category as $cat): ?>
            <li class="nav-hover-aool"><a class="dropdown-item" href=""><?php echo $cat?></a></li>
           <?php endforeach ; ?>
          </ul>
        </li>
		
        <li class="nav-item">
          <a class="nav-link nav-hover-aool" href="<?php echo $base_url."/login" ; ?>" tabindex="-1" aria-disabled="true">ورود</a>
        </li>
		<li class="nav-item">
          <a class="nav-link nav-hover-aool" href="<?php echo $base_url."/signup" ; ?>" tabindex="-1" aria-disabled="true">عضویت</a>
        </li>
		
      </ul>
      <form class="d-flex"  method="get" action="<?php echo $base_url.'/search'; ?>" >
        <input name="s"class="form-control me-2" type="text" placeholder="دنبال چی میگردی؟" aria-label="Search">
        <input class="btn btn-outline-success" type="submit" value="جستجو">
      </form>
    </div>
  </div>
</nav>
	
		
	
	
	
	
	
	
	
	</header>
	
<?php 
}


?>