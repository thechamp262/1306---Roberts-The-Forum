<?php
	session_start();
	//echo (error_reporting(E_ALL));
	//echo (ini_set("display_errors", 1));
	require_once("../ForumModel.php");
	$model = new ForumModel();	
	$iew = $model->obtainProfileInfo($_SESSION['username']);
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="../css/main.css">
			<link rel="stylesheet" href="../css/about.css">
			<title>About | The Forum</title>
		</head>
		<body>
		
			<header>
				<nav id="home_nav">
					<h1 id="logo"><a href="loginHome.php">The Forum</a></h1>
					<p id="saying">Your Favorite Artist, All The Time.</p>
					<ul id="navItems">
						<li><a href="loginHome.php">Home</a></li>
						<li><a href="albums.php">Albums</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="profile.php"><?php echo($_SESSION['username']);?></a></li><!-- obtaining the name of the user to be added for display on the profile -->			
					</ul>
				</nav>
			</header>
		<div id="container">
			<h1 id="about_header">About The Forum</h1>
			<p id="about_info">The Forum is a place where people can go to obtain information about their favorite artist. Here here we celebrate music and your love of it. Now you are able to View photos, news, reviews, and albums of your favorite artist, and soon you will also be able to learn about similar artist, view event information and purchase tickets to those events, and listen to a radio station based on your favorite artist. In other words we are music!</p>  
		</div><!-- ends container -->
			<footer>
				<ul id="footer">
					<li><a href="loginHome.php">Home</a></li>
				<li><a href="login_about.php">About us</a></li>
				<li><a href="login_contact.php">Contact us</a></li>
				</ul>
				<p id="echo">Site powered by:</br><a href="http://the.echonest.com">echonest.com</a></p>
			</footer>
	</body>
			