<?php
	// Inialize session
	session_start();
	
	$name=$_POST['name'];
	$pass=$_POST['pass'];

	$cn=mysqli_connect("localhost","root","","online");

	$q=mysqli_query($cn,"select * from registration where name='$name' and pass='$pass'");

	$r=mysqli_fetch_array($q);
	if($r[1]==$name && $r[3]==$pass && $r[9]=='user')
	{
		$_SESSION['username'] =  $r[1];
		header('location:index.php');
	}
	else if($r[1]==$name && $r[3]==$pass && $r[9]=='admin')
	{
		$_SESSION['adminname'] = $r[1];
		echo "<script>window.location='admin/index.php'</script>";	
	}
	else if($r[1]!=$name && $r[3]!=$pass)
	{
		echo "<script>alert('User and Password could not match');</script>";
		echo "<script>window.location='registration.php'</script>";	
	}
	else 
	{
		echo "<script>alert('Enter Username and Password');</script>";
		echo "<script>window.location='login.php'</script>";	
	}	
?>