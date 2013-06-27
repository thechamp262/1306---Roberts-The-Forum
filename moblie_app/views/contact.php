<?php
	echo (error_reporting(E_ALL));
	echo (ini_set("display_errors", 1));
	require_once("../ForumModel.php");
	$model = new ForumModel();	
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="../css/main.css">
			<link rel="stylesheet" href="../css/form.css">
			<title>Contact | The Forum</title>
		</head>
		<body>
		
			<header>
				<nav id="home_nav">
					<h1 id="logo"><a href="loginHome.php">The Forum</a></h1>
					<p id="saying">Your Favorite Artist, All The Time.</p>
					<ul id="navItems">
						<li><a href="../index.php">Home</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="join.php">Join</a></li>
					</ul>
				</nav>
			</header>
		<div id="container">
		
		<form action="" id="joinForum" method="post">
	<ul id="jForm">
		<li><label for="Name">Name:</label></li>
		<li><input type="text" name="Name" id="Name" placeholder="Jane Doe"/></li>
				
		<li><label for="email">Email:</label></li>
		<li><input type="email" name="email" id="email" placeholder="you@example.com"/></li>
		
		<li><label for="message">Message:</label></li>
		<li><input type="text" name="message" id="message"/></li>
		
		<li><input type="submit" value="submit" name="submit" id="subbtn"/></li>
	</ul>
	<?php 
		if(isset($_POST["submit"])){
			if(!empty($_POST["Name"]) && !empty($_POST["email"]) && !empty($_POST["message"])){
				$to = "thefuturechamp@gmail.com";
				$message =  $_POST["message"];
				$header = "From: ". $_POST["email"];
				mail($to, $header, $message);
				echo("Message Sent!");
				echo($header);
			}else{
				echo("<h3 class='error'>Sorry All fields need to be filled in!</h3>");
			}//ends if 
		}//ends if isset
	?>	
	
	</form>
</div> <!-- ends container -->
<footer>
			<ul id="footer">
				<li><a href="../index.php">Home</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
			<p id="echo">Site powered by:</br><a href="http://the.echonest.com">echonest.com</a></p>
		</footer>
