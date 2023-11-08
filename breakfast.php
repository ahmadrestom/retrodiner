<!DOCTYPE html>
<head>
	<title>Breakfast Menu - Retro Diner</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php"><img class="logo" src="images/logo.png" width="513" height="84" alt="" title=""></a>
			<a href="index.php"><img  src="images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a class="active" href="burger.php">Menu</a>
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
		<div class="content">
			<div>
				<div>
					<h1>Breakfast</h1>
					<div> <a href="breakfast.php"><img src="images/breakfast2.jpg" width="484" height="271" alt=""></a></div>
					
					<ul>
						<?php
							$db = new mysqli ("localhost","User","123456789","resto diner");
							if (mysqli_connect_errno()){
								echo "<p>Error: Could not connect to database.<br>";
								exit;
							}
							$query = "SELECT * from breakfast";
							$stmt = $db->prepare($query);
							$stmt->execute();
							$stmt->store_result();
							$stmt->bind_result($BreakfastName, $BreakfastDetails, $BreakfastPrice);
							while($stmt->fetch())
							{
									echo "<li>";
									echo '<h2 style="font-style: italic;font-size :30px;color :#822619;font-weight :bold;text-decoration :none;">'.$BreakfastName.'</h2>';
									echo '<p style="color:#1b6568">'.$BreakfastDetails.'</p>';
									echo '<span class="price">'.$BreakfastPrice.'</span>';
									echo "</li>";
							}
							$stmt->free_result();
							$db->close();							
						?>
						<li class="last	">
							<h2 style="font-style: italic;font-size :30px;color :#822619;font-weight :bold;text-decoration :none;"><a href="breakfast.php">Pancakes</a></h2>
							<p style="color:#1b6568">
								Served with maple/strawberry syrup, scrambled eggs, fresh berries, banana slices, and whipped cream
							</p>
							<span class="price">$2</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<h1>Menu</h1>
			<ul class="navigation">
				<li class="first">
					<a href="burger.php">BURGERS</a>
				</li>
				<li>
					<a href="hotdog.php">HOTDOGS</a>
				</li>
				<li>
					<a href="shake.php">SHAKES</a>
				</li>
				<li>
					<a class="active" href="breakfast.php">BREAKFAST</a>
				</li>
			</ul>
			<a href="breakfast.php" class="download">&nbsp;</a> </div>
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