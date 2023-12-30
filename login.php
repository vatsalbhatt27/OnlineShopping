<?php 
	include("header.php");
?>


<html>	
<body>

<form method="POST" action="loginproc.php" >

<table  width="30%" height="410"  align=center cellpadding=10 style="background-color:lightgray">
<tr>
	<th colspan=2 background="image/lock.gif" style="background-repeat:no-repeat" height="290" width="290"align="center" ></th>
</tr>
<tr>
	<td  colspan=2 align=center> <input type="text" name="name" size="50"  size="50" style="height: 30px;" placeholder="Enter Name"> </td>
</tr>
<tr >
	<td colspan=2 align=center> <input type="password" name="pass"  size="50" style="height: 30px;" placeholder="Enter Password"> </td>
</tr>
<tr>
	<td align=center> <input type="submit" name="submit" value="Submit" style=font-size:13px;border-color:darkred;color:white;background:darkred;border-radius:10px;margin:1px;padding:8px;border-width:10px"> </td>
</tr>
<tr >
	<td align=center><a href="forgotpass.php">Forgot Password?</a></td>
</tr>
<tr>
	<td  align=center colspan=2><a href="registration.php"><B><font color="black" >Create Account !!</B>.New</font></a></td>
</tr>

	
</table> 
</form>
</body>
</html>
<?php include("footer.php");?>   


