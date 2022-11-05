<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book A Laugh</title>
	<link rel="stylesheet" href="css/style-index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
</head>

<body>
	<div class="root">
		<div class="left">
			<h1><strong>Book&nbsp;&nbsp;A&nbsp;&nbsp;Laugh</strong></h1>
		</div>
		<div class="right">
			<form method="post">
				<h2 id="login">SignIn</h2>
				<label>
					Enter your email:</br>
					<input id="email" name="user_name" type="text" placeholder="Enter Email">
				</label>

				<label>
					Enter your password:</br>
					<input id="password" name="password" type="text" placeholder="Enter password">
				</label>

				<input class="btn" value="SignIn" id="btn" type="submit">

				<a href="login.php">Click to Signup</a><br><br>
			</form>
		</div>
	</div>
	<footer>Made by&nbsp;Shruti, Swara, Krish, Hitakrit</a>&nbsp;| 2022.</footer>
</body>

</html>