<?php 
	include("header.php");
?>
<html>
<body >
<form action="supplierpro.php" method="POST">
<body>

<div class="bg">
	<table  style="width:50%" align=center border=2  cellpadding=15 >
		<tr align=center>
			<th colspan=2 bgcolor=DarkRed><font  color=white><h1><B>Supplier</h1></B></th>
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
			<td><input type="text" name="email" size="50" style="height: 30px;"  placeholder="Enter Your E-mail"  required></td>
		</tr>	
  		<tr>
			<td align=right><font size=5><B>Product   :</B></td>
			<td><input type="text" name="pname"  size="50" style="height: 30px;" placeholder="Enter Your Product "  required></td>
		</tr>	
		<tr>
			<td align=right><font size=5><B>Quantity :</B></td>
			<td><input type="text" name="qty"  size="50" style="height: 30px;"placeholder="Enter Quantity"  required></td>
		</tr>
		<tr>
			<td align=right><font size=5><B>Price  :</B></td>
			<td><input type="text" name="price"  size="50" style="height: 30px;" placeholder="Enter Price"  required></td>
		</tr>
		<tr>
			<td align=right><font size=5><B>Address  :</B></td>
			<td><input type="text" name="address" size="50" style="height: 30px;" placeholder="Enter Your Address"  required></td>
		</tr>
		<tr>
			<td align=right><font size=5><B>City  :</B></td>
			<td><input type="text" name="city"  size="50" style="height: 30px;" placeholder="Enter City"  required></td>
		</tr>
		<tr>
			<td align=right><font size=5><B>Pin Code :</B></td>
			<td><input type="text" name="pincode" size="50" style="height: 30px;" placeholder="Enter Pincode"  required></td>
		</tr>
		
		<tr>
			<td align=center colspan=2><input type="submit" value="Submit" name="submit" style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px"></td>
		</tr>
	</table>
	</form>

</body>
</html>
<?php include("footer.php");?>   


