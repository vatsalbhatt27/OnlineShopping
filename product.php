
<html>
<head>
	<title>Online Shopping</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();   
	});
</script>
</head>
<body>
<table width=100% >
	
	<tr>
		<td>
			<?php
			$cn=mysqli_connect("localhost","root","","online");
			
			$cnt = 0;
			$q = mysqli_query($cn,"select * from vegetable");
			
			echo "<table border=1 align='center'>" ;
			while($r = mysqli_fetch_array($q))
			{
				if($cnt%4 == 0)
				{		
					echo "<tr><td><a href='productdisc.php?id=".$r[0]."' data-toggle='tooltip' title='$r[1] &nbsp;&nbsp; Order Now'><img src='./p1/".$r[6]."' width='300px' height='300px' ></a> </td>";
				}
				else
				{
					echo "<td><a href='productdisc.php?id=".$r[0]."' data-toggle='tooltip' title=' $r[1] &nbsp;  &nbsp; Order Now'><img src='./p1/".$r[6]."' width='350px' height='300px'></a></td>";
				}
				$cnt++;
			}
			echo "</table>";
			?>
		</td>
	</tr>
</table>
</body>
</html>






