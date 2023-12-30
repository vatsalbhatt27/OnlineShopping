<?php	
	$cn = mysqli_connect("localhost","root","","online");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$mno = $_POST['mno'];
		$pass = $_POST['pass'];
		$email = $_POST['email'];

		$q2=mysqli_query($cn,"SELECT * FROM `registration` WHERE mno='$mno'");
		if(mysqli_num_rows($q2)==0)
		{			
			$q = mysqli_query($cn,"INSERT INTO `registration` (`id`,`name`,`mno`, `pass`,`email`, `type`) VALUES (NULL, '$name', '$mno', '$pass', '$email', 'user');");
			echo "<script>window.location='login.php'</script>";
		}
		else
		{
			echo "<script>alert('User already registered')</script>";
			echo "<script>window.location='login.php'</script>";
		}
	}
	else
	{
		echo "<script>window.location='index.php'</script>";
	}		
?>