<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
 		include("header.php");
		echo"<script>window.location='login.php'</script>";
	}
	else
	{	
		include("header1.php"); 
		$q1 = mysqli_query($cn,"select * from registration where name='".$_SESSION['username']."'");
		$r1 = mysqli_fetch_row($q1);
?>		

	<table style="width:100%" align=center border=3>
	<tr align=center>
		<th  colspan=8 bgcolor=DarkRed><font color=white><h1>🛒Your Order 🛒</h1></th>
	</tr>
	<tr>
		<th>Name :</td>
		<th colspan=3> <?php echo $_SESSION['username']; ?></td>
	</tr>
	<tr>
		<th>Date</th>
		<th>Amount</th>
		<th>Bill no</th>
		<th>View Details</th>
	
	</tr>
	<?php
	$q2 = mysqli_query($cn,"SELECT * FROM `order_detail` WHERE `name` LIKE '".$_SESSION['username']."'");
	
	while($r2 = mysqli_fetch_array($q2))
	{
		echo "<tr><td>".$r2[3]."</td><td>".$r2[4]."</td><td>".$r2[1]."</td>
		<td><form action='orderdetails.php' method='POST' > <input type='hidden' name='billno' value='". $r2[1]."'><input type=submit value=View   style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></form></td></tr>";
	}
	?>
	<tr>
		<td>
	</table>
<?php
	}
?>	
