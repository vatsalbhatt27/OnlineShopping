<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
 		include("header.php");
		echo"<script>window.location='login.php'</script>";
	}
	else
	{	
		include("header1.php"); 
		$cn = mysqli_connect("localhost","root","","online");
		if(isset($_POST['confirm_order']))
		{
			$billno=0;
			$q2=mysqli_query($cn,"select max(billno) as mbil from order_detail");
			while($r=mysqli_fetch_array($q2))
			{ $billno=$r[0]+1;}
		
			//$mb=$_POST['billno'];
			$name=$_SESSION['username'];
			$dt = date('d-m-Y');
			$gt=$_POST['gt'];
			echo "<center>";
			echo "<h1>Thank You....🤝".$_POST['nm']."</h1><br>";	
			echo "<h1>Your Order is Sucessfully <br> Update will be send to your Regisger Mobile No ".$_POST['mno']."</h1>";
			echo "<h1>Your Total Amount is :: ".$_POST['gt']."   </h1>";
			echo "<h1> Pay on Delivery</h1>";
			echo "<a href='index.php'><button>Continue Shopping</button> </a>";
			echo "</center>";


			$q1 = mysqli_query($cn,"INSERT INTO `order_detail` (`id`, `billno`,`name`, `date`, `amt`) VALUES (NULL, '$billno', '$name','$dt', '$gt')");
			$q=mysqli_query($cn,"UPDATE  uorder SET  billno='".$billno."',date='".$dt."', status ='ok' where name='".$name."' and status like 'pending'");
			//echo "<script>alert('Thank You For Order is Sucessfully');</script>";
		}

	}
		
	
?>
<?php include("footer.php");?>   
