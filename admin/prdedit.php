<?php
	include('index.php');
	$id=$_POST['id'];
	$cn=mysqli_connect("localhost","root","","online");
	
	$q=mysqli_query($cn,"select * from vegetable where id='$id'");
	while($r=mysqli_fetch_array($q))
	{
		//echo $r[0]." > ".$r[1];
?>

		<form method="POST" action="proedit.php">

		<table style="width:100%" align="center" border=2>
		 <tr align=center>
			<th colspan=2><font color="darkred" size="10">Edit Product</th>
		</tr>
<?php
	echo "<tr width='100%' ><td align='right' ><font color='black'size='5'>Product Name :</td><td><textarea name='nm' >".$r[1]."</textarea></td></tr>";
	echo "<tr><td align='right'><font color='black' size='5'>Code :</td><td><textarea name='code' >".$r[2]."</textarea></td></tr>"; 
	echo "<tr><td align='right'><font color='black' size='5'> Quantity: </td><td><textarea name='conti' >".$r[3]."</textarea></td></tr>";
	echo "<tr><td align='right'><font color='black' size='5'>Price : </td><td><textarea name='price' >".$r[4]."</textarea></td></tr>";
	echo "<tr><td align='right'><font color='black' size='5'>Category : </td><td><textarea name='cat' >".$r[5]."</textarea></td></tr>";
	//echo "<tr><td align='right'><font color='black' size='5'>Photo : </td><td><input type='file' name='photo' >".$r[6]."</td></tr>";
	
	
	echo "<tr><td align='right'><input type='hidden' name='id' value=".$r[0]."></td><td></td></tr>";
?>
	<tr>
		<td colspan=2 align=center>
		<input type="submit" value="Update Details"  style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px"  class="button" value="submit"></td>
		</tr>
</table>
</form>
<?php
}
?>