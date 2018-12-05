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
					<a href="index.html">Your account</a> | <a href="cart.php">View cart</a> | <a href="index.html">Help</a>
				</div><!-- end nav -->
				<img src="images/header1.jpg" width="744" height="145" alt="Harry Potter cd" /></a>
			</div><!-- end header -->
			
			<?php
				$qty1 = $qty2 = $qty3 = $qty4 = $qty5 = $qty6 = 0;

				$errors=array();
				
				function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}	
			?>
			
			<div id="body">
				<div class="inner">
				<form method="GET" action="cart.php">
					
					<div class="leftbox">
						<h3>Star Wars Episode IV DVD</h3>
						<img src="images/photo_1.jpg" width="93" height="95" alt="photo 1" class="left" />
						<p><b>Price:</b> <b>$20</b> &amp; eligible for FREE Super Saver Shipping</p>
						<p><b>Availability:</b> Usually ships within 24 hours</p>
						<div class="clear"></div>
						
							<p align="right"> 
							<input type="number" name="qty1"  value="<?php echo $qty1;?>">
						
						<div class="clear"></div>
					</div><!-- end .leftbox -->
					
					<div class="rightbox">
						<h3>Star Wars Episode V DVD </h3>
						<img src="images/photo_1.jpg" width="107" height="91" alt="photo 4" class="left" />
						<p><b>Price:</b> <b>$20</b> &amp; eligible for FREE Super Saver Shipping</p>
						<p><b>Availability:</b> Usually ships within 24 hours</p>
						<div class="clear"></div>
						
							<p align="right"> 
							<input type="number" name="qty2"  value="<?php echo $qty2;?>">
							
						
						<div class="clear"></div>
					</div><!-- end .rightbox -->
                  
					<div class="clear br"></div>

					<div class="leftbox">
						<h3>Star Wars Episode VI DVD </h3>
						<img src="images/photo_2.jpg" width="93" height="101" alt="photo 2" class="left" />
						<p><b>Price:</b> <b>$20</b> &amp; eligible for FREE Super Saver Shipping</p>
						<p><b>Availability:</b> Usually ships within 24 hours</p>
						<div class="clear"></div>
						<form method="GET" action="cart.php">
							<p align="right"> 
							<input type="number" name="qty3"  value="<?php echo $qty3;?>">
													
						<div class="clear"></div>
					</div><!-- end .leftbox -->
					<div class="rightbox">
						<h3>Star Wars Episode IV Blu-Ray</h3>
						<img src="images/photo_2.jpg" width="90" height="103" alt="photo 5" class="left" />
						<p><b>Price:</b> <b>$25</b> &amp; eligible for FREE Super Saver Shipping</p>
						<div class="clear"></div>
						
							<p align="right"> 
							<input type="number" name="qty4"  value="<?php echo $qty4;?>">
						
						<div class="clear"></div>
					</div><!-- end .rightbox -->

					<div class="clear br"></div>

					<div class="leftbox">
						<h3>Star Wars Episode V Blu-Ray</h3>
						<img src="images/photo_3.jpg" width="106" height="100" alt="photo 3" class="left" />
						<p><b>Price:</b> <b>$25</b> &amp; eligible for FREE Super Saver Shipping</p>
						<p><b>Availability:</b> Usually ships within 24 hours</p>
						<div class="clear"></div>
						
							<p align="right"> 
							<input type="number" name="qty5"  value="<?php echo $qty5;?>">
							
						
						<div class="clear"></div>
					</div><!-- end .leftbox -->
					<div class="rightbox">
						<h3>Star Wars Episode VI Blu-Ray</h3>
						<img src="images/photo_3.jpg" width="91" height="99" alt="photo 6" class="left" />
						<p><b>Price:</b> <b>$25</b> &amp; eligible for FREE Super Saver Shipping</p>
						<p><b>Availability:</b> Usually ships within 24 hours</p>
						<div class="clear"></div>
						
							<p align="right"> 
							<input type="number" name="qty6"  value="<?php echo $qty6;?>">
							
						
			
						<div class="clear"></div>
					</div><!-- end .rightbox -->
					<input type="submit" value="Add to Cart" name="order">
                  			</form>
				</div><!-- end .inner -->
			</div><!-- end body -->
		
			<div class="clear"></div>
				<div id="footer">
					Web Design by Shubham Kale
              
					&nbsp;
				<div id="footnav">
					Legal | Privacy Policy
				</div><!-- end footnav -->
              
			</div><!-- end footer -->
		</div><!-- end inner -->
	</div><!-- end wrapper -->
</body>
</html>