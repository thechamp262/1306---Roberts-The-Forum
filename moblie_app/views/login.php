<?php
session_start();

//echo (ini_set("display_errors", 1));

require_once("../ForumModel.php");
require_once("../db.php");

$results = "";

if(isset($_POST["submit"])){
	if(!empty($_POST["userName"]) && !empty($_POST["pass"])){//first we make sure that both fields are not empty
		$model = new ForumModel(MY_DSN, MY_USER, MY_PASS);
		$results = $model->userLogin($_POST["userName"],$_POST["pass"]);/*then we make sure that both the username and pass are found in the database*/
		if($results){/*if they are both found within the same profile then a session is started and the user is sen to their profile page*/
			$_SESSION["Authenticated"] = 1;
			header("Location: profile.php");
		}else{/* if they are not found then the user will recieve an error message */
			$_SESSION["Authenticated"] = 0;	
			echo("<h1 class='error'>Your User Name and/or Password is incorrect</h1>");
		}
	}
}
?>

<!DOCTYPE html>
		<html lang="en">
			<head>
				<meta charset="utf-8">
				<link rel="stylesheet" href="../css/main.css">
				<link rel="stylesheet" href="../css/form.css">
				<title>Home | The Forum</title>
			</head>
			<body>
	
		<header>
		<nav id="home_nav">
			<h1 id="logo"><a href="../index.php">The Forum</a></h1>
			<p id="saying">Your Favorite Artist, All The Time.</p>
			<ul id="navItems">
				<li><a href="../views/login.php">Login</a></li>
				<li><a href="../views/join.php">Join</a></li>
			</ul>
		</nav>
	</header>
	
	<div id="container">
	<!-- all info in this form will be used by the php above -->
	<form action="" id="joinForum1" method="post">
		<ul id="jForm">
			<li><label for="userName">UserName:</label></li>
			<li><input type="text" name="userName" id="userName"/></li>
					
			<li><label for="pass">Password:</label></li>
			<li><input type="password" name="pass" id="pass"/></li>
			
			<li><input type="submit" value="Login" name="submit"/></li>
		</ul>		
	</form>
	</div><!-- ends container -->
		<footer>
			<ul id="footer">
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
		</footer>
	</body>
</html>

