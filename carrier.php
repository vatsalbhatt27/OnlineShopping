<?php 
	include("header.php");
?>
<html>
<body >
<form action="carrierpro.php" method="POST" enctype="multipart/form-data">
</head>
<body>
	<table style="width:50%" align=center border=2  cellpadding=15>
		<tr align=center>
			<th colspan=2 bgcolor=DarkRed><font  color=white><h1><B>Job Application</h1></B></th>
		</tr>
		<tr>
			<td align=right><font size=5><B>Photo :</B></td>
			<td><input type="file" name="photo"  size="50" style="height: 30px;"  placeholder=" Upload Your Image "  required></td>
		</tr>
		<tr>
			<td align=right><font size=5><B>Name :</B></td>
			<td><input type="text" name="name"  size="50" style="height: 30px;" placeholder=" Enter Your Name "  required></td>
		</tr>
		<tr>
			<td align=right><font size=5><B>Mobile Number :</B></td>
			<td><input type="text" name="mno"  size="50" style="height: 30px;" placeholder="Enter Mobile  Number"  required></td>
		</tr>
		<tr>
			<td align=right><font size=5><B>E -mail  :</B></td>
			<td><input type="text" name="email"  size="50" style="height: 30px;" placeholder="Enter Your E-mail"  required></td>
		</tr>	
  		<tr>
			<td align=right><font size=5><B>Qualification :</B></td>
			<td><input type="text" name="qualification" size="50" style="height: 30px;"  placeholder="Enter qualification"  required></td>
		</tr>
		<tr>
			<td align=right><font size=5><B>Birth Date   :</B></td>
			<td><input type="date" name="birthdate"  size="50" style="height: 30px;" placeholder="Enter Your E-mail"  required></td>
		</tr>	
		<tr>
			<td align=right><font size=5><B>Gender  :</B></td>
			<td ><font color=white><input type="radio" name="gender" value="male" checked> Male<input type="radio" name="gender" value="female">Female</td>
		</tr>	
		<tr>
			<td align=right><font size=5><B>Address  :</B></td>
			<td><input type="text" name="address"  size="50" style="height: 30px;" placeholder="Enter Your Address"  required></td>
		</tr>
		<tr>
			<td align=right><font size=5><B>Pin code  :</B></td>
			<td><input type="text" name="pincode"  size="50" style="height: 30px;" placeholder="Enter Your Pincode"  required></td>
		</tr>	
		<tr>
			<td align=right><font size=5><B>City :</B></td>
			<td><input type="text" name="city"  size="50" style="height: 30px;" placeholder="Enter Your City"  required></td>
		</tr>		
		<tr>
			<td align=right><font size=5><B>State   :</B></td>
			<td><input type="text" name="state" size="50" style="height: 30px;"  placeholder="Enter Your State"  required></td>
		</tr>	
		<tr>
			<td align=center colspan=2><input type="submit" value="Submit" name="submit" style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px"></td>
		</tr>
	</table>
	</form>
</div>
</body>
</html>
<?php include("footer.php");?>   


