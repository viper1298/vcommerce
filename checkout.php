<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");

?>
	<html>
		<head>
			<title>My Online Shop</title>
			<link rel="stylesheet" href="styles/style1.css" media="all"/>
			</head>
			<body>
			<!--Main container starts here-->
				<div class="main_wrapper">
					<!--Header starts here-->
					<div class="header_wrapper">
					
					<a href="index1.php"><img id="logo2"  src="images/logo1.png"/></a>
					<img  id="banner2" src="images/banner1.jpg"/>
					
					

					</div>
					<!--Header ends here-->
					
					<!--Navigation bar starts here-->
		<div class="menubar">
			<ul id="menu">
			<li><a href="index1.php">Home</a></li>
			<li><a href="all_products.php">All Products</a></li>
			<li><a href="customer/my_account.php">My Account</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Contact Us</a></li>
			</ul>
			<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text"  name="user_query" placeholder="Search a Product"/>
				<input type="submit" name="search" value="Search"/>
				</form>
			
			</div>
			</div> 
					<!--Navigation bar ends here-->
					
					
					<!--Content wrapper starts here-->
						<div class="content_wrapper">				
								<div id="sidebar">
								<div id="sidebar_title">Categories</div>
										
										<ul id="cats">
										
											<?php getCats(); ?>
											
										<ul>
										<div id="sidebar_title">Brands</div>
										
										<ul id="cats">
										
											<?php getBrands(); ?>
											
										<ul>
								</div>
								<div id="content_area">
								<?php cart(); ?>
								
								<div id="shopping_cart">
									<span style="float:right; font-size:17px; padding:5px; line-height:40px">
									<?php
										if(isset($_SESSION['customer_email']))
											{
											echo "<b> Welcome </b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>";
											}
										else
											{
												echo "<b>Welcome Guest:</b>";
											}
									?>
									
									
									<b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_Items(); ?> Total Price: <?php total_price(); ?>  <a href="cart.php" style="color:yellow">Go to Cart</a>
									
									</span>
								
								
								</div>
								
								
								<div id="products_box">
								
								<?php
									if(!isset($_SESSION['customer_email']))
									{
										include("customer_login.php");
									}
									else
									{
										include("payment.php");
									}
								?>
								
								
								</div>
								
								</div>
								
						</div>
					<!--Content wrapper ends here-->
					
					<!--Footer starts here-->
							<div id="footer">
							<h2 style="text-align:center;padding-top:30px;">&copy; 2017 by wwww.onlineTuts.com</h2>
							</div>
					<!--Footer ends here-->
				</div>
				<!--Main container ends here-->
					
			</body>
					
	</html>