<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Document</title>
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
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a  class="active" href="feedback.php">Feedback</a>
				</li>
			</ul>
		</div>
	</div>


    <div id="body">
		<div id="content">
			<div>
				<!-- <div>	
					
				</div> -->
				
				<?php
					$db = new mysqli ("localhost","User","123456789","resto diner");
					if (mysqli_connect_errno()){
						echo "<p>Error: Could not connect to database.<br>";
						exit;
					}
					$query = "SELECT * from feedback";
					$stmt = $db->prepare($query);
					$stmt->execute();
					$stmt->store_result();
					$stmt->bind_result($name, $feedback, $rating);

					while($stmt->fetch())
					{
						echo "<div>";
						echo '<li style="list-style-type: none;">';
						echo '<h1 style="font-style: italic;font-size :30px;color :#822619;font-weight :bold;text-decoration:none; ">'.$name.'</h1>';
						echo '<p style="color:#1b6568; font-size:20px; font-weight:bold ">'.$feedback.'</p>';
						echo "</li>";
						echo "</div>";
					}
					$stmt->free_result();
					$db->close();							
				?>
			
			</div>
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