<!DOCTYPE html>
<html lang="en">
<?php
		$conn=mysqli_connect("localhost","User","123456789","resto diner");
		if(!$conn)
        {
			die('Could not Connect MySql Server:' .mysql_error());
        }
        
		if(isset($_POST['submit'])){
			$Feedback_Name = $_POST['fullname'];
			$Feedback_Message = $_POST['feedback'];
            $star1 = $_POST['rate'][0];
            $star2 = $_POST['rate'][1];
            $star3 = $_POST['rate'][2];
            $star4 = $_POST['rate'][3];
            $star5 = $_POST['rate'][4];
            $rating=NULL;
            if(isset($star1)){
                $rating = 1;
            }else if(isset($star2)){
                $rating = 2;
            }
            else if(isset($star3)){
                $rating = 3;
            }else if(isset($star4)){
                $rating = 4;
            }else if(isset($star5)){
                $rating = 5;
            }
            
			$query = "INSERT INTO feedback VALUES ('$Feedback_Name', '$Feedback_Message','$rating')";
			if(mysqli_query($conn, $query)){
				header("Location: feedbacks.php");
				exit;
			}else{
				echo "Error: " . $query . ":-" . mysqli_error($conn);								
			}
            
		}
		mysqli_close($conn);						
    ?>

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
		<div class="content">
			<div>
				<div>
					<h1>Feedback</h1>
					<ul>
						<li>
							<h4>We'd like to have your feedbacks and rating</h4>
							<p>
								Help us make our restaurant a better place by sharing your feedback here
							</p>
							<p></p>
						</li>
						
					</ul>
					<form action="feedback.php" method="POST">
						<label for="fullname"> <span class="text">Your Name:</span>
							<input type="text" name="fullname" id="fullname">
						</label>
						<label for="feedback"> <span>Your Feedback:</span>
							<textarea placeholder="Drop your feedback here..." name="feedback" id="feedback"></textarea>
						</label>
						<input type = "submit" name="submit" value="">
					</form>
				</div>
			</div>
		</div>
	</div>
    <div style="margin-left:170px">
        <h1 style="font-size :40px;	color :#822619;	font-family :'Lobster1.4Regular'; font-weight :normal;">Rate your visit: </h1>
        <form action="feedback.php" method="POST">
            5<input value="5" type="radio" name="rate" id="rate-5">

            4<input value="4" type="radio" name="rate" id="rate-4">

            3<input value="3" type="radio" name="rate" id="rate-3">

            2<input value="2" type="radio" name="rate" id="rate-2">

            1<input value="1" type="radio" name="rate" id="rate-1">
        </form>
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