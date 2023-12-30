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
<html>
<head>
	<title>contactus</title>
<head>
<body>
	<br><br>
	<table border=0 width="100%">
	
	<tr>
		<td width=30% align=center><font size=+2><b>Aayush Bhatt</b><br>Mo:-8888941761
			<br>Aaush1@gmail.com</td>
		</td>
		<td width=10px></td>
		<td width=30% align=center><font size=+2> Civil Court,<br>Airport road ,<br>Rajkot</td>
		<td width=10px></td>
		<td width=30% align=center><font size=+2><b>Chintu Ahuja</b><br>Mo:- 9174801161
			<br>chintu1122@gmail.com</td>
		</td>
	</tr>
</table>
</form>
</html>
<br>           
<?php include("footer.php");?>   


