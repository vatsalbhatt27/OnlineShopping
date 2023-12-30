<?php
	include("header.php");
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from complain");
	
	echo "<table border=2 width=100%  >";
	echo "<tr><td align=center bgcolor=DarkRed><font size=+2  color=white><B>Id</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Name</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Email</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Feedback</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td>
		</tr>";	}
	echo "</table>";
?>
<?php include("footer.php");?>   


	