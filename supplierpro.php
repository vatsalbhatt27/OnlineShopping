<?php	
	$cn = mysqli_connect("localhost","root","","online");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$mno = $_POST['mno'];
		$email = $_POST['email'];
		$pname = $_POST['pname'];
		$qty = $_POST['qty'];
		$price = $_POST['price'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
			
		$q= mysqli_query($cn,"INSERT INTO supplier (`name`,`mno`,`email`,`pname`,`qty`,`price`,`address`,`city`,`pincode`) VALUES ('$name', '$mno', '$email', '$pname','$qty','$price','$address','$city','$pincode')");
	}
	echo "<script>alert('Thank You');</script>";	
	echo "<script>window.location='index.php'</script>";			
?>