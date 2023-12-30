<?php
	$cn=mysqli_connect("localhost","root","","online");
	
	$q = mysqli_query($cn,"select * from registration");
	if(mysqli_num_rows($q) == 0)
	{
		echo "<h2 align=center> There is No product </h2>";
	}
	else
	{
		include("header.php");
		
		echo "<table  style=width:100% border=3 >
								<tr align=center bgcolor=DarkRed><th><font color=white size =5>Id</th>
								<th bgcolor=DarkRed ><font color=white size =5> Image</th> 
								 <th  bgcolor=DarkRed><font color=white size =5> Name</th> 
								 <th bgcolor=DarkRed><font color=white size =5>Mobile NO</th>
								<th bgcolor=DarkRed><font color=white size =5>Password</th>
								 <th bgcolor=DarkRed><font color=white size =5>E-Mail</th>
								 <th bgcolor=DarkRed><font color=white size =5>Address</th>
								<th bgcolor=DarkRed><font color=white size =5>City</th>
								<th bgcolor=DarkRed><font color=white size =5>State</th>
								<th bgcolor=DarkRed><font color=white size =5>Pincode</th>
								 <th bgcolor=DarkRed><font color=white size =5>Delete</th></tr>";
								
								     
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr bgcolor=white><td align=center ><font color=black  size=5 >".$r[0]."</td>
			<td align=center ><font color=black  size=5 ><img src='../image/logo.png' width='150px' height='150px'></td>
			<td align=center ><font color=black size=5 >".$r[1]."</td>
			<td align=center ><font color=black  size=5 >".$r[2]." </td> 
			<td align=center ><font color=black  size=5 >".$r[3]." </td>	
			<td align=center><font color=black  size=5 >".$r[4]." </td>
			<td align=center ><font color=black size=5 >".$r[5]."</td>
			<td align=center ><font color=black size=5 >".$r[6]."</td>
			<td align=center  class=b1><font color=white size=5 ><id=".$r[0]."'>
			<td></td>
			<td align=center  class=b1><font color=white size=5 ><a href='reguserdel.php?id=".$r[0]."'><input type=submit value=Delete   style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px  class=button value=submit></a></td></tr>";
					
		}
		echo "</table>";
	 }
	
?><?php include("footer.php");?>   
