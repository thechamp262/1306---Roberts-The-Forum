<?php
	require("../auth.php");
	session_start();
	echo (ini_set("display_errors", 1));
	require_once("../ForumModel.php");
	$test = new ForumModel();
	$iew = $test->obtainProfileInfo($_SESSION['username']);
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="../css/main.css">
			<link rel="stylesheet" href="../css/albums.css">
			<title><?php echo($_SESSION['username']);?> | The Forum</title><!-- obtaining the name of the user to be added to the title -->
		</head>
		<body>
			<header>
				<nav id="home_nav">
					<h1 id="logo"><a href="loginHome.php">The Forum</a></h1>
					<p id="saying">Your Favorite Artist, All The Time.</p>
					<ul id="navItems">
						<li><a id="now" href="loginHome.php">Home</a></li>
						<li><a href="albums.php">Albums</a></li>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="profile.php"><?php echo($_SESSION['username']);?></a></li><!-- obtaining the name of the user to be added for display on the profile -->
				
					</ul>
				</nav>
			</header>

			<div id="container">
				<h1>Top Albums For <span id="favArtist"><?php echo($iew{"favArtist"});?></span>:</h1>
				<section id="albums">
				</section>
				
			</div><!-- ends container -->
			
		<footer>
			<ul id="footer">
				<li><a href="loginHome.php">Home</a></li>
				<li><a href="login_about.php">About us</a></li>
				<li><a href="login_contact.php">Contact us</a></li>
			</ul>
			<p id="echo">Site powered by:</br><a href="http://the.echonest.com">echonest.com</a></p>
		</footer>
			<script type="text/javascript" src="../js/jquery-1.10.1.js"></script>
			<script type="text/javascript" src="../js/album_list.js"></script>
		</body>
	</html>
