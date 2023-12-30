
<?php
	include("header.php");
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from supplier");
	
	echo "<table border=2 width=100%>";
	echo "<tr><td align=center bgcolor=DarkRed><font size=+2 color=white ><B>Id</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Name</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Mobile No</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Email</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Product Name</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Quantity</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Price</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Address</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Citys</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>PinCode</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td>".$r[9]."</td></tr>";
	}
	echo "</table>";
?>
<?php include("footer.php");?>   

