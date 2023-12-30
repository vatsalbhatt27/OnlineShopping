<?php
	include("header.php");
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from vegetable");
	if(mysqli_num_rows($q) == 0)
	{
		echo "<h2 align=center> There is No product </h2>";
	}
	else
	{
		
		
		echo "<table  width=100%  border=3>
								<tr align=center><th bgcolor=DarkRed><font color=White size =5>Id</th></font>
								 <th  bgcolor=DarkRed><font color=White size =5> Product Name</th> </font>
								 <th bgcolor=DarkRed><font color=White size =5>Code</th>
								<th bgcolor=DarkRed><font color=White size =5>Quantity</th>
								 <th bgcolor=DarkRed><font color=White size =5>Price</th>
								 <th bgcolor=DarkRed><font color=White size =5>Category</th>
								<th bgcolor=DarkRed><font color=White size =5>Photos</th>
								<th bgcolor=DarkRed><font color=White size =5>Update</th>
								 <th bgcolor=DarkRed><font color=White size =5>Delete</th></tr>";
								
								     
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr bgcolor=white><td align=center ><font color=black  size=5 >".$r[0]."</td>
			<td align=center ><font color=black size=5 >".$r[1]."</td>
			<td align=center ><font color=black  size=5 >".$r[2]." </td> 
			<td align=center ><font color=black  size=5 >".$r[3]." </td>	
			<td align=center><font color=black  size=5 >".$r[4]." </td>
			<td align=center ><font color=black size=5 >".$r[5]."</td>
			<td align=center ><font color=black  size=5 ><img src='../p1/".$r[6]."'width='150px' height='150px'></td>
			

			
			
			<td align=center  class=b1><font color=white size=5 ><id=".$r[0]."'>
			<form action='prdedit.php' method='POST'><input type=hidden name='id' value=".$r[0]."><input type=submit value=Edit   style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></form></td>
			<td align=center  class=b1><font color=white size=5 ><a href='prddel.php?id=".$r[0]."'>Delete</a></td></tr>";
		
		}
		echo "</table>";
	 }
	
?>
<?php include("footer.php");?>   
