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

			//read from database
			$query = "select * from users where user_name = '$user_name' and password = '$password'";
			
			// // <--------- Presence of Below Code leads to vulnerability --------->
			$result = mysqli_query($con, $query);
			if($result){
				$user_data = mysqli_fetch_assoc($result);
				$_SESSION['user_id'] = $user_data['user_id'];
				header("Location: index.php");
				die;
			}
			// // <--------------------------------------------------------------->
			

			// // <--------- Absence of Below Code leads to vulnerability --------->
			// if($result)
			// {
			// 	if($result && mysqli_num_rows($result) > 0)
			// 	{

			// 		$user_data = mysqli_fetch_assoc($result);
					
			// 		if($user_data['password'] === $password)
			// 		{

			// 			$_SESSION['user_id'] = $user_data['user_id'];
			// 			header("Location: index.php");
			// 			die;
			// 		}
			// 	}
			// }
			// // <--------------------------------------------------------------->

			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
				<h2 id="login">Login</h2>
				<label>
					Enter your email:</br>
					<input id="email" type="text" name="user_name" placeholder="Enter Email">
				</label>

				<label>
					Enter your password:</br>
					<input id="password" type="text" name="password" placeholder="Enter password">
				</label>

				<input class="btn" value="Login" id="btn" type="submit">
				<a href="signup.php">Click to Signup</a><br><br>
			</form>
		</div>
	</div>
	<footer>Made by&nbsp;Shruti, Swara, Krish, Hitakrit</a>&nbsp;| 2022.</footer>
</body>

</html>