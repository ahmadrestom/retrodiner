<!DOCTYPE html>
<head>
	<title>Contact - Retro Diner</title>
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
					<a href="burger.php">Menu</a>
				</li>
				<li>
					<a class="active" href="contact.php">Contact</a>
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
					<h1>Contact Us</h1>
					<ul>
						<li>
							<h4>How can we help? </h4>
							<p>
								We're here to help and answer any question you might have. We look forward to hearing from you
							</p>
							<p>Please fill in the following form</p>
						</li>
						
					</ul>



					<form action="contact.php" method="POST">
						<label for="name"> <span class="text">Your Name:</span>
							<input type="text" name="name" id="name">
						</label>
						<label for="email"> <span>Your E-mail:</span>
							<input type="text" name="email" id="email">
						</label>
						<label for="subject"> <span>Subject:</span>
							<input type="text" name="subject" id="subject">
						</label>
						<label for="message"> <span>Your Message:</span>
							<textarea name="message" id="message"></textarea>
						</label>
						<input type = "submit" name="submit" value="" >
					</form>

					<?php

						$conn=mysqli_connect("localhost","User","123456789","resto diner");
						if(!$conn){
							die('Could not Connect MySql Server:' .mysql_error());
						}

						if(isset($_POST['submit'])){
							$Contact_Name = $_POST['name'];
							$Contact_Email = $_POST['email'];
							$Contact_Subject = $_POST['subject'];
							$Contact_Message = $_POST['message'];
							$query = "INSERT INTO contact VALUES ('$Contact_Name', '$Contact_Email', '$Contact_Subject', '$Contact_Message')";
							if(mysqli_query($conn, $query)){
								header("Location: Acc.html");
								exit;
							}else{
								echo "Error: " . $sql . ":-" . mysqli_error($conn);								
							}
							$expire = time() + (60*60*24*10);
							setcookie('','',$expire);
						}
						mysqli_close($conn);						
					?>
					<h4>Please rate your visit and drop your feedback <a style="text-decoration:none;" href="feedback.php">HERE</a></h4>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<h1>Open Everyday</h1>
			<span>including holidays</span> <span>from 8AM until 1AM</span>
			<h1>Address</h1>
			<span>Retro Diner Restaurant</span> <span>2281 Ash Street</span> <span>Dallas, TX 75212</span>
			<h1>Phone Number</h1>
			<span>972-879-4317</span>
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