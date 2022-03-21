


<?php 



switch($page_id){
	
	
	case 1 :?>
	
	
	<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">صفحه قبلی</span>
    </li>
    
    <li class="page-item active" aria-current="page">
      <span class="page-link">1</span>
    </li>
    <li class="page-item "><a class="page-link" href="<?php echo $base_url.'/posts/2'; ?>">2</a></li>
    <li class="page-item ">
      <a class="page-link" href="<?php echo $base_url.'/posts/2'; ?>">صفحه بعدی</a>
    </li>
  </ul>
</nav>
	
	
	
	<?php
	break ;
	case $total_page :
	?>
	
	
	<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="<?php echo $base_url.'/posts/'.$page_id-1 ; ?>" tabindex="-1" aria-disabled="true">صفحه قبلی</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo $base_url.'/posts/'.$page_id-1 ; ?>"><?php echo ($page_id-1); ?></a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="<?php echo $base_url.'/posts/'.$page_id; ?>"><?php echo $page_id ; ?></a>
    </li>
    <li class="page-item disabled"><a class="page-link" href=""><?php echo $page_id+1 ; ?></a></li>
    <li class="page-item disabled">
      <a class="page-link" href="">صفحه بعد</a>
    </li>
  </ul>
</nav>
	
	
	<?php
	break;
	
	
	default:
	
	?>
	
	<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="<?php echo $base_url.'/posts/'.$page_id-1 ; ?>" tabindex="-1" aria-disabled="true">صفحه قبلی</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo $base_url.'/posts/'.$page_id-1 ; ?>"><?php echo $page_id-1 ; ?></a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="<?php echo $base_url.'/posts/'.$page_id; ?>"><?php echo $page_id ; ?></a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo $base_url.'/posts/'.$page_id+1 ; ?>"><?php echo $page_id+1 ; ?></a></li>
    <li class="page-item">
      <a class="page-link" href="<?php echo $base_url.'/posts/'.$page_id+1 ; ?>">صفحه بعد</a>
    </li>
  </ul>
</nav>
	<?php
	break;
	
	
	
}













?>