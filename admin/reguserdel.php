
<?php
	$cn=mysqli_connect("localhost","root","","online");
	
	$id = $_GET['id'];
	$q = mysqli_query($cn,"delete from rigistration where id='$id'");
	
?>

/*<script>
window.location="reguser.php";
</script>*/