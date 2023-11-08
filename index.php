<!DOCTYPE html>
<head>
	<title>Retro Diner Home Page</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>

	<div id="header">
		<div>
			<a href="index.php"><img class="logo" src="images/logo.png" width="550" height="90" alt="" title=""></a>
			<a href="index.php"><img  src="images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<li>
					<a class="active" href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="burger.php">Menu</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="feedback.php">Feedback</a>
				</li>
			</ul>
		</div>
	</div>


	<div id="body">
		<div class="featured"> 
			<a href="burger.php"><img src="images/burger-specials.png" width="960" height="590" alt=""></a>
			<h2>Welcome to Retro Diner!</h2>
			<h4 style="font-size :24px; color :#822619;	font-family :'Lobster1.4Regular'; font-weight :normal;">To check our menus, <a style="text-decoration:none" href="burger.php"> click here</a></h4>
			<h4 style="font-size :24px; color :#822619;	font-family :'Lobster1.4Regular'; font-weight :normal;">For reservation, <a style="text-decoration:none" href="reservations.php"> click here</a></h4>
			<h4 style="font-size :24px; color :#822619;	font-family :'Lobster1.4Regular'; font-weight :normal;">For delivery, <a style="text-decoration:none" href="delivery.php"> click here</a></h4>
			<ul>
				<li>
					<a href="hotdog.php"><img src="images/hotdogs.jpg" width="284" height="214" alt=""></a>
				</li>
				<li>
					<a href="shake.php"><img src="images/shakes.jpg" alt="" width="284" height="214"></a>
				</li>
				<li>
					<a href="breakfast.php"><img src="images/breakfast.jpg" alt="" width="284" height="214"></a>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="footer">
		<div>
			<ul>
				<li class="first">
					<h2>Delivery Hotline</h2>
					<h3>Call 0-123-456-789</h3>
					<ul>
						<li>
							<a href="https://www.facebook.com/" class="facebook"></a>
						</li>
						<li>
							<a href="https://twitter.com/" class="twitter"></a>
						</li>
						<li>
							<a href="https://plus.google.com/" class="googleplus"></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index.php"><img class="logo" src="images/logo-footer.png" alt=""></a>
					<ul class="navigation">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About Us</a>
						</li>
						<li>
							<a href="burger.php">Menu</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
					<span>&copy; 2023 RetroDiner.com. All Rights Reserved</span>
				</li>
				<li class="last">
					<h2>Follow Us By Email</h2>
					<form action="index.php">
						<input type="text" name="subscribe" placeholder="Enter Your Email Here...">
						<input type="submit" value="">
					</form>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>