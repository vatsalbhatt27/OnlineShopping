
<?php
	include("header.php");
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from carrier");
	
	echo "<table border=2 width=100%>";
	echo "<tr><td align=center bgcolor=DarkRed><font size=+2 color=white><B>Id</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Photo</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Name</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Mobile No</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Email</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Qualification</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Birth-Date</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Gender</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Address</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>PinCode</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>City</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>State</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr> <td>".$r[0]."</td><td><img src='../p1/".$r[1]."'width='150px' height='150px'></td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td>".$r[9]."</td><td>".$r[10]."</td><td>".$r[11]."</td></tr>";
	}
	echo "</table>";
?>
<?php include("footer.php");?>   

