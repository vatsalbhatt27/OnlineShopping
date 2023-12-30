<?php
	include("header.php");
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from feedback");
	
	echo "<table border=2 width=100%  >";
	echo "<tr><td align=center bgcolor=DarkRed><font size=+2  color=white><B>Id</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Name</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Email</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Feedback</td>
		<td align=center bgcolor=DarkRed><font size=+2 color=white><B>Delete</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td>
		<td align=center  class=b1><font color=white size=5 ><a href='feedbackdel.php?id=".$r[0]."'><input type=submit value=Delete   style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></a></td></tr>";	}
	echo "</table>";
?>
<?php include("footer.php");?>   


	