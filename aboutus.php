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
<p><font size=5px><B>Online Shopping: Fruits & Vegetable</B></p></font>

<P>&ensp;&ensp;✨     Online Shopping is India's leading pure-play value E-commerce platform. Founded in 2023 by
<P> <I><B>Aayush Bhatt and Chintu Ahuja.</I></B></p> <br>
&ensp;&ensp;✨     Online Shopping is one of the top four online Vegetable & Fruits shopping destinations of India. Online Shopping brings together a wide assortment of good quality and value- priced merchandise on its platform. Online Shopping vision is to enable the shoppers of Bharat to experience the joy of living their aspirations through reliable, value-for-money shopping. With a personalized, multilingual interface and cutting edge technology, Online Shopping has simplified the shopping experience for its value-conscious buyers by showcasing the most relevant products- products that are a good functional fit with their needs and of a quality that lasts- thereby delivering true value to its customers.<br><br><br>


<p> &ensp;&ensp;✨     With its commitment to high service standards, Online  Shopping suppliers operate under a well structured ecosystem that enables them to offer great quality products at affordable prices. With majority of the value-seeking, middle-income, price-conscious buyers coming from the non-metros, Online Shopping logistics networks powered by third party logistics cover more than 96% of India’s pin codes enabling order deliveries to more than 2500 towns and cities and expanding. Further, Online Shopping mission is to become India’s value lifestyle omni-channel leader.</p> 

<p>&ensp;&ensp;✨     We are excited about continuing to build a complete ecosystem around value commerce, where we can serve Bharat consumers wherever they are on their offline to online shopping journey.</p>
</html>
</body>
<?php include("footer.php");?>   

