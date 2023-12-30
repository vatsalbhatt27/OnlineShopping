<?php	
	$cn = mysqli_connect("localhost","root","","online");
	
	
		$name = $_POST['name'];
		$mno = $_POST['mno'];
		$email = $_POST['email'];
		$qualification= $_POST['qualification'];
		$birthdate = $_POST['birthdate'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$pincode = $_POST['pincode'];
		$city = $_POST['city'];
		$state = $_POST['state'];
	
		if(file_exists("p1/".$_FILES['photo']['name']))
		{
			echo "<script>alert('User  already exist')</script>";
			echo "<script>window.location='carrier.php'</script>";
		}
		else
		{
			move_uploaded_file($_FILES['photo']['tmp_name'],"p1/".$_FILES['photo']['name']);
			$photo=$_FILES['photo']['name'];			
			$q1= mysqli_query($cn,"INSERT INTO carrier VALUES ('','$photo','$name', '$mno', '$email', '$qualification','$birthdate','$gender','$address','$pincode','$city','$state')");
			echo "<script>alert('Thank You');</script>";	
	     		echo "<script>window.location='index.php'</script>";	
		}
			
?>