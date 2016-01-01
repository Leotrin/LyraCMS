<?php 
	include 'tmp/head.php'; 
	include 'tmp/header.php';

	if(isset($page)):
		include 'inc/'.$page;
	else:
		include 'inc/error404.php';
	endif;


	include 'tmp/footer.php';
?>

