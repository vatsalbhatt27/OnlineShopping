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

<body >
<form action="compro.php" method="POST">
	<table style="width:30%" border="2" align="center" cellpadding=10>
		<tr>
			<th colspan=2 bgcolor=DarkRed><font size=+2  color=white>Complain</th>
		</tr>
  		<tr>
			<td align=right><B>Name::</B></td>
			<td><input type="text" name="name" placeholder="Full Name" size=28 required></td>
		</tr>	
		<tr>
			<td align=right><B>E-mail::</B></td>
			<td><input type="text" name="email" placeholder="Your email.." size=28 required></td>
		</tr>
		<tr>
			<td align=right><B>Comment::</B></td>
			<td><input type="text" name="comment" placeholder="Your Complain..." size=28 required></td>
		</tr>
		<tr>
			<td align=center colspan=2><input type="submit" value="send" name="submit"></td>
		</tr>
	</table>
	</form>
</div>	
</div>
</body>
</html>
<?php include("footer.php");?>