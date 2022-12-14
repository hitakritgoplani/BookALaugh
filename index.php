<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style-available.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
	<title>Book A Laugh</title>
</head>
<body>
	<header>
		<h1>Available Shows &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></h1>
	</header>
	<div class="root">
		<div class="show-parent">
			<div class="show">
				<a href="book.html"><img src="images/samay-raina.jpg" alt="Samay Raina"></a>
				<div class="details">
					<h3>Samay Raina</h3>
					<h3>Venue: The Habitat</h3>
					<h3>Date: 10-11-2022</h3>
				</div>
			</div>
		</div>
		
		<div class="show-parent">
			<div class="show">
				<a href="book.html"><img src="images/tanmay-bhat.jpg" alt="Tanmay Bhat"></a>
				<div class="details">
					<h3>Tanmay Bhat</h3>
					<h3>Venue: The Habitat</h3>
					<h3>Date: 11-11-2022</h3>
				</div>
			</div>
		</div>
		
		<div class="show-parent">
			<div class="show">
				<a href="book.html"><img src="images/anubhav-bassi.jpg" alt="Anubhav Singh Bassi"></a>
				<div class="details">
					<h3>Anubhav Singh Bassi</h3>
					<h3>Venue: The Habitat</h3>
					<h3>Date: 12-11-2022</h3>
				</div>
			</div>
		</div>		
	</div>
	<footer>Made by&nbsp;Shruti, Swara, Krish, Hitakrit</a>&nbsp;| 2022.</footer>
</body>
</html>