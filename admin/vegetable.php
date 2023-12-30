<?php
	include("header.php");
?>
<html>
<body>
	<form action="vegprocess.php" method="POST" enctype="multipart/form-data">
	<table style="width:100%" align=center border=2>
		<tr align="center">
			<th  bgcolor="DarkRed"><font color=white><h2>INPUT VEGETABLE & FRUITS</h2></th></table>
	<table align="center" border=3  cellpadding=10>
	<tr>
		<td align="left"  ><B>Name ::</B></td>
		<td align="left"  ><input type="text" name="nm"  placeholder="ENTER NAME"  required> </td>
	</tr>
	<tr>
		<td align="left" ><B>Code ::</B></td>
		<td align="left"><input type="text" name="code"  placeholder="ENTER CODE"required></td>
	</tr>
	<tr>
		<td align="left" ><B>Quantity::</B></td>
		<td align="left" ><input type="text" name="conti" placeholder="ENTER QUANTITY"   required></td>
	
	<tr>
		<td align="left"><B>Price  ::</B></td>
		<td align="left"><input type="text" name="price"  placeholder="ENTER PRICE" min="0"  required></td>
	</tr>
	<tr>
		<td align="left"  ><B>Category::</B></td>
		<td align="left" ><input type="text" name="cat"  placeholder="ENTER CATEGORY" min="0"  required></td>
	</tr>
	<tr>
		<td align="left"  ><B>Photo  ::</B></td>
		<td align="left"><input type="file" name="photo" required></td>
	</tr>
	<tr>
		<td  align=right > <input type="submit" name="b1" value="Add"style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px"></td>
		<td  bgcolor= > <input type="reset" name="b2" value="Reset" style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px"></td>
	</tr>

</table>
</form>
</body>
</html>
<?php include("footer.php");?>   


