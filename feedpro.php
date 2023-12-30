<?php	
	$cn = mysqli_connect("localhost","root","","online");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];

		$q = mysqli_query($cn,"INSERT INTO `online`.`feedback`VALUES (NULL, '$name', '$email','$comment');");
	}
	echo "<script>window.location='index.php'</script>";		
?>