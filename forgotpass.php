<html>
<form action="#" method="POST" >
<table  align="center">
<tr >
	<td style="width:100% " colspan="2" align="center" cellpadding=16 >
		<h3>Forget  Password </font></h3>
	</td>			
</tr>
<tr >							
		<td  colspan=2 align=center><input type="email" name="email"  size="50"  size="50" style="height: 30px;" placeholder="Enter Your E-mail"  required></td>
</tr>
<tr >							
		<td  align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>		
<tr>
		<td  align=center colspan=2><a href="login.php"><B><font color="black" > Back to Login!!</B></font></a></td>

</tr>			
</table>				
</form>	
<?php include("footer.php");?>
<?php 
	if(isset($_POST['submit']))
	{
		$cn = mysqli_connect("localhost","root","","online");
		
		$email=$_POST['email'];
	
		$q=mysqli_query($cn,"select * from registration where  email='$email'");
		$r=mysqli_fetch_row($q);
		if($r[4]==$email)
		{	
			
			$email = "$r[4]";
			$subject = "Forgot Password";
			$body = "Hi '".$r[1]."' Password is '".$r[3]."'";
			$headers = "From: mukeshusadadiya0@gmail.com";

			if (mail($email, $subject, $body, $headers)) 
			{
				echo "<script>alert('Email successfully sent to Your email')</script>";
				echo "<script>window.location='login.php'</script>";
			} 
			else 
			{
				echo "<script>alert('Email sending failed...')</script>";
			}
		}
		else
		{
			echo "<script>alert(' Email is Wrong......')</script>";
			echo "<script>window.location='forgotpass.php'</script>";
		}
	}
?>
</div>
</body>
</html>