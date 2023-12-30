<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
 		include("header.php");
	}
	else
	{
		include("header1.php");	
	}
?>
<?php
	include("slider.php");
	include("product.php");
	include("footer.php");
	
?>
