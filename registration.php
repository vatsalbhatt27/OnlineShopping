<?php 
	include("header.php");
?>


<body >

<table align=center>
<tr>
	<td><font size=+3><B>Registration</B></td>
</tr>
<br>
<form action="registrationpro.php" method="POST">
	<table style="background-color:lightgray"  width="30%"  height="300" align="center" cellpadding=16 >
		<tr>
			
			<td  colspan=2 align=center><input type="text" name="name"  size="50"  size="50" style="height: 30px;" placeholder=" Enter Your Name "  required></td>
		</tr>
		<tr>
			
			<td  colspan=2 align=center><input type="text" name="mno" size="50"  size="50" style="height: 30px;"  placeholder="Enter Mobile  Number"  required></td>
		</tr>
		<tr>
			
			<td  colspan=2 align=center><input type="password" name="pass" size="50"  size="50" style="height: 30px;"  placeholder="Enter Password"  required></td>
		</tr>
		<tr>
			
			<td  colspan=2 align=center><input type="email" name="email"  size="50"  size="50" style="height: 30px;" placeholder="Enter Your E-mail"  required></td>
		</tr>	
  			
		<tr>
			<td align=center colspan=2><input type="submit" value="Submit" name="submit" style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px"></td>
		</tr>
		<tr>
			<td colspan=2 align=center><a href="login.php"><B><font color="black">Sign-in.</B>Already a customer ??</a></font></td>

		</tr>
	</table>
	</form>
</div>	
</div>
</body>
</html>
<br><br>
<?php include("footer.php");?>
