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
		$r = mysqli_fetch_row($q1);
?>		
	<table style="width:100%" align=center border=3>
	<tr align=center>
		<th  colspan=9 bgcolor=DarkRed><font   color=white><h2>🛒Your Order 🛒</h2></th>
	</tr>
	<tr>
		<th >Name :</th>
		<th colspan="2"> <?php echo $_SESSION['username']; ?> </th>
		<th> Contact No :</td>
		<th > <?php echo $r[2]; ?></td>
	</tr>
	<tr>
		<th>No </th>
		<th>Product </th>
		<th>Item </th>
		<th>Quantity</th>
		<th>Rate</th>
		<th>Amount</th>
		<th>Bill No</th>

	</tr>
	<?php
	$billno=$_POST['billno'];
	$q4 = mysqli_query($cn,"SELECT * FROM `uorder` WHERE `name`='".$_SESSION['username']."' AND `status` LIKE 'ok' AND `billno` = '$billno'");
	$no=1;
	while($r4 = mysqli_fetch_array($q4))
	{
		$price = $r4[6] * $r4[8];
		echo "<tr bgcolor=white><td align=center ><font color=black  size=5 >".$no++."</td>
		
		<td align=center ><font color=black  size=5 ><img src='p1/".$r4[4]."' width='50px' height='50px'></td>
		<td align=center ><font color=black size=5 >".$r4[5]."</td>
		<td align=center ><font color=black  size=5 >".$r4[6]."".$r4[7]." </td> 
		<td align=center ><font color=black  size=5 >".$r4[8]." </td>	
		<td align=center ><font color=black  size=5 >".$price." </td>
		<td align=center ><font color=black  size=5 >".$r4[1]." </td>";	
	}
	?>
	</table>
	
<?php
	}
?>	
