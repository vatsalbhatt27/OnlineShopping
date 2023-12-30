<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
 		include("header.php");
	}
	else
	{
		include("header1.php");	
	}
?>
<html>
<body>
<table width=100%>
	
	<tr>
		<td>
			<?php
				$cn=mysqli_connect("localhost","root","","online");
				
				$id = $_GET['id'];
				
				$q = mysqli_query($cn,"select * from vegetable where id='$id' or nm like'%".$id."%'");
				while($r = mysqli_fetch_array($q))
				{
				echo "<table border=1 width=100%>";
				echo "<tr><td align=center><img src='p1/".$r[6]."' width=200px height=200px></td>
				<td>
				<li type='none'><font size='+3' color='maroon'> Name: <font size='+2' color='black'>".$r[1]."</li> </font>
				<li type='none'><font size='+3' color='maroon'> Price : <font size='+2' color='black'> Rs.".$r[4]."</li>
				<li type='none'> <font size='+3' color='maroon'>Category :<font size='+2' color='black'>".$r[5]."</font></li>";
					
				echo "<form action='orderplace.php' method='POST'> <input type='hidden' name='id' value='".$r[0]."'>
				<label >Unit</label>
 				 <select name='unit'>
    				<option value='piece'>Piece</option>
    				<option value='dozen'>Dozen</option>
    				<option value='kg'>Kg</option>
    				<option value='500kgm'>500Kgm</option>
				<option value='liter'>Liter</option>
				<input type='text' name='qty' value='1' size='2'>
  				</select><input type='submit' name='ordsubmit' value='OrderNow'> </form>";
				echo "</td></tr></table>";
				}
			?>
		</td>
	</tr>
</table>
</body>
</html>
<?php include("footer.php");?>