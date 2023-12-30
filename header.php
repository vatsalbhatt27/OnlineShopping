
<?php
	$cn=mysqli_connect("localhost","root","","online");
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  color: Black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:DarkRed;
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
</head>
<body>
<div class="topnav">


  <a class="active" href="index.php"><img src="image/online.png " height="90" width="200"></a>&nbsp;&nbsp;
<a href="index.php">🏠</a>

  <a href="aboutus.php">About</a>
  <a href="contact.php">Contact </a>
<a href="supplier.php">Supplier</a>
<a href="carrier.php">Carrier </a>
<a href="login.php">Sign-in🔐</a>
  <div class="search-container">
    <form action="productdisc.php" method="GET">
      <input type="text" placeholder="Search.." name="id">
      <input type="submit" name="submit" value="Go">
    </form>
  </div>
</div>
  <head>
     </body>
</html>


