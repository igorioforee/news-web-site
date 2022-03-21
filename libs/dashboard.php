<?php
session_start();

require_once("./libs/header.php");
require_once("./libs/Db.php");

isset($_SESSION["user"]) ?: die(header("location:".$base_url.'/login?false_csrf'));


?>



<main>

	<div class="container">

		<p class="display-5"> خوش آمدید <em><?php echo $_SESSION["user"] ;  ?> </em> </p>


	</div>








</main>








<?php

require_once("./libs/footer.php");


?>