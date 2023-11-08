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
			<div>
				<div>
					<h1>Reservation</h1>
					<ul>
						<li>
							<h4>Open everyday from 8AM until 1AM</h4>
							<p>
								Our restaruant is open for our beloved customers
							</p>
                            <p>
                                Go on and fill the following form to reserve a table for you and your family

                            </p>
							<p></p>
						</li>
						
					</ul>
					<form action="reservations.php" method="POST">
						<label for="fullname"> 
                            <span class="text">Your Name:</span>
							<input type="text" name="fullname" id="fullname">
						</label>
                        <label for="resdate"> 
                            <span class="text">Date:</span>
							<input type="date" name="resdate" id="resdate">
						</label>
                        <label for="time"> 
                            <span class="text">Time: </span>
							<input type="time" name="restime" id="restime">
						</label>
                        <label for="numberofpeople"> 
                            <span class="text">Number of people: </span>
							<input min="1" max="6" type="number" name="numberofpeople" id="numberofpeople">
						</label>
						<input type = "submit" name="submit" value="">
					</form>

                    <?php
                        $db = new mysqli ("localhost","User","123456789","resto diner");
                        if (mysqli_connect_errno()){
                            echo "<p>Error: Could not connect to database.<br>";
                            exit;
                        }
                        if(isset($_POST['submit'])){
							$Reservation_Name = $_POST['fullname'];
							$Reservation_Date = $_POST['resdate'];
							$Reservation_Time = $_POST['restime'];
							$number_of_people = $_POST['numberofpeople'];

							$query = "INSERT INTO reservation VALUES ('$Reservation_Name', '$Reservation_Date', '$Reservation_Time', '$number_of_people')";
							if(mysqli_query($db, $query)){
								header("Location: index.php");
								exit;
							}else{
								echo "Error: " . $sql . ":-" . mysqli_error($conn);								
							}
						}
                        $db->close();
                    ?>

				</div>
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