<?php
	
	$cn=mysqli_connect("localhost","root","","online");
	/*$q = mysqli_query($cn,"select * from registration");
	$r = mysqli_fetch_row($q);*/
	
?>
<html>
<head>

<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: DarkRed;
 color: white;
  font-family:bold;	

}

.topnav a.active {
  background-color: #e9e9e9;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 20px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>

<body>

<div class="topnav">
  	<a class="active" href="index.php"><img src="image/online.png " height="90" width="200"></a>
	<a href="index.php">🏠</a>
  	<a href="aboutus.php">About</a>
  	<a href="contact.php">Contact</a>
  	<a href="feedback.php">Feedback</a>
	<a href="order.php">Your Order</a>
	<a href="complain.php">Complain</a>
	<a href="logout.php">Sign-Out📴</a>
  	<div class="search-container">
    		 <form action="productdisc.php" method="GET">
      		<input type="text" placeholder="Search.." name="id">
     		 <input type="submit" name="submit" value="Go">
    		</form>
		<?php echo"👤welcome🔓::"?><?php echo $_SESSION["username"];?>
		 	
  	</div>
</div>
</head>
</body>
</html>
   

