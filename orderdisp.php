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
		$r1= mysqli_fetch_row($q1);
?>		
	<table style="width:100%" align=center border=3>
	<tr>
		<th  colspan=9 bgcolor="DarkRed"><font   color="white"><h2> 🛒Your Order 🛒</h2></th>
	</tr>
	<tr>
		<th >Name :</th>
		<th colspan="2"> <?php  echo $_SESSION['username'];?> </th>
		<th> Contact No :</td>
		<th > <?php echo $r1[2]; ?></td>
	</tr>
	<tr>
		<th>No </th>
		<th>Bill No</th>
		<th>Product </th>
		<th>Item </th>
		<th>Quantity</th>
		<th>Rate</th>
		<th>Amount</th>
		<th>Delete</th>
	</tr>

	<?php
	$q4 = mysqli_query($cn,"SELECT * FROM `uorder` WHERE name='".$_SESSION['username']."' AND `status` LIKE 'pending'");
	$no=1;
	$gt=0;
	while($r4 = mysqli_fetch_array($q4))
	{
		$price = $r4[6] * $r4[8];
		$gt = $gt + $price;

		echo "<tr bgcolor=white><td align=center ><font color=black  size=5 >".$no++."</td>
		<td align=center ><font color=black size=5 >".$r4[1]."</td>
		<td align=center ><font color=black  size=5 ><img src='p1/".$r4[4]."' width='50px' height='50px'></td>
		
		<td align=center ><font color=black size=5 >".$r4[5]."</td>
		<td align=center ><font color=black  size=5 >".$r4[6]." ".$r4[7]." </td> 
		<td align=center ><font color=black  size=5 >".$r4[8]." </td>	
		<td align=center ><font color=black  size=5 >".$price." </td>";	

		$q5 = mysqli_query($cn,"update vegetable set conti=conti-".$r4[6]." where nm='".$r4[5]."'");
		echo "<td align=center  class=b1><font color=white size=5 ><a href='ordelete.php?id=".$r4[0]."'><input type=submit value=Delete   style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></a></td></tr>";
	}
	?>
	<tr>
		<td colspan="5" align="right">Final Total :</td>
		<td> <?php echo $gt; ?></td>
	</tr>
	</table>
	<br><br>
	<center><form action="conorder.php" method="POST" ><input type="hidden" name="mno" value="<?php echo $r1[2]?>"> <input type="hidden" name="nm" value="<?php echo $r1[1]; ?>"><input type="hidden" name="gt" value="<?php echo $gt; ?>">  <input type="submit" name="confirm_order" value="Conform Order"  style=font-size:30px></form></center>
<?php
	}
?>	
