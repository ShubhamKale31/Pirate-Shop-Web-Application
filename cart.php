<?php
session_start();
?>

<!DOCTYPE html> 
<html lang="en">

<head>
	<title>Shubham Kale Coding Challenge</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="myCSS.css"/>
</head>

<body>
    <div id="wrapper">
		<div id="inner">
			<div id="header">
				<h1><img src="images/logo.gif" width="519" height="63" alt="Online Movie Store" /></h1>
				<div id="nav">
					<a href="index.html">Your account</a> | <a href="cart.html">View cart</a> | <a href="index.html">Help</a>
				</div><!-- end nav -->
				<img src="images/header1.jpg" width="744" height="145" alt="Harry Potter cd" /></a>
			</div><!-- end header -->
			
			<div id="body">
				<div class="inner">
					<?php
						$qty1 = $_GET['qty1'];
						$qty2 = $_GET['qty2'];
						$qty3 = $_GET['qty3'];
						$qty4 = $_GET['qty4'];
						$qty5 = $_GET['qty5'];
						$qty6 = $_GET['qty6'];
					?>

					<?php 
						
						echo "Star Wars Episode IV DVD Quantity:";
						echo "    ".$qty1."<br>";
						echo "Star Wars Episode V DVD Quantity:";
						echo "    ".$qty2."<br>";
						echo "Star Wars Episode VI DVD Quantity:";
						echo "    ".$qty3."<br>";
						echo "Star Wars Episode IV Blu-Ray Quantity:";
						echo "    ".$qty4."<br>";
						echo "Star Wars Episode V Blu-Ray Quantity:";
						echo "    ".$qty5."<br>";
						echo "Star Wars Episode VI Blu-Ray Quantity:";
						echo "    ".$qty6."<br>";
						
						$dvd=20;
						$ray=25;
						$dvd_total = ($qty1+$qty2+$qty3)*$dvd;   
						$dvd_final = $dvd_total*0.9;
						$ray_total = ($qty4+$qty5+$qty6)*$ray;  
						$ray_final = $ray_total*0.85;
						echo "Total amount without discount:  ". ($dvd_total+$ray_total)."<br>";
						echo "Discount Applied to DVD's is 10%"."<br>";
						echo "Discount on DVD: ".$dvd_final."<br>";
						echo "Discount Applied to Blu Ray's is 15%"."<br>";
						echo "Discount on Blu Ray: ".$ray_final."<br>";
						
						if (($qty1+$qty2+$qty3+$qty4+$qty5+$qty6)>99) {
							echo "Final Amount: ". 0.9*($dvd_final+$ray_final)."<br>";
						}
						else{
							echo "Final Amount: ".($dvd_final+$ray_final)."<br>";
						}
						echo "<br>";
						
						
					?>
				</div><!-- end .inner -->
			</div><!-- end body -->
			
			<div class="clear"></div>
				<div id="footer">
					Web design by Shubham Kale
              
					&nbsp;
				<div id="footnav">
					Legal | Privacy Policy
				</div><!-- end footnav -->
              
			</div><!-- end footer -->
		</div><!-- end inner -->
	</div><!-- end wrapper -->
</body>
</html>