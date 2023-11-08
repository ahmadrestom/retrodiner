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
		<div class="content">
			<div >
				<div >
					<h1>Delivery</h1>
					<ul>
						<li >
							<h4>We deliver all over the region </h4>
							<p>Please fill in the following form to send us your order</p>
						</li>
						
					</ul>



					<form action="delivery.php" method="POST">
					
                        <label for="OrderName"> 
                            <span class="text">Name</span>
							<input type="text" name="OrderName" id="OrderName">
						</label>
						
                        <label for="OrderEmail"> 
                            <span>E-mail:</span>
							<input type="email" name="OrderEmail" id="OrderEmail">
						</label>
						
                        <label for="OrderLocation"> 
                            <span>Location:</span>
							<input type="text" name="OrderLocation" id="OrderLocation">
						</label>
						
                        <label for="OrderItems">
                            <span>Order:</span>
							<textarea placeholder="What do you want to order?" style="width:500px; height:100px; color: #1b6568;font-size:20px" name="OrderItems" id="OrderItems"></textarea>
						</label>

                        <label for="OrderComment"> 
                            <span>Comment:</span>
							<textarea placeholder="Add any comment here..." style="width:500px; height:100px; color: #1b6568;font-size:20px" name="Comment" id="Comment"></textarea>
						</label> <br>
						
                        <input type = "submit" name="submit" value="" >
					
                    </form>

					<?php

						$conn=mysqli_connect("localhost","User","123456789","resto diner");
						if(!$conn){
							die('Could not Connect MySql Server:' .mysql_error());
						}

						if(isset($_POST['submit'])){
							$OrderName = $_POST['OrderName'];
							$OrderEmail = $_POST['OrderEmail'];
							$OrderLocation = $_POST['OrderLocation'];
							$OrderItems = $_POST['OrderItems'];
                            $Comment = $_POST['Comment'];
							$query = "INSERT INTO delivery VALUES ('$OrderName', '$OrderEmail', '$OrderLocation', '$OrderItems','$Comment')";
							if(mysqli_query($conn, $query)){
								header("Location: index.php");
								exit;
							}else{
								echo "Error: " . $sql . ":-" . mysqli_error($conn);								
							}
						}
						mysqli_close($conn);						
					?>
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
							<a href="http://www.freewebsitetemplates.com/go/facebook" class="facebook"></a>
						</li>
						<li>
							<a href="http://www.freewebsitetemplates.com/go/twitter" class="twitter"></a>
						</li>
						<li>
							<a href="http://www.freewebsitetemplates.com/go/googleplus" class="googleplus"></a>
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
							<a href="menu.php">Menu</a>
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
						<input type="text" name="subscribe" value="Enter Your Email Here...">
						<input type="submit" value="">
					</form>
				</li>
			</ul>
		</div>
	</div>




    
</body>
</html>