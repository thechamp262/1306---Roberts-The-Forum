<?php
	require("../auth.php");
	session_start();
	//echo (ini_set("display_errors", 1));
	require_once("../db.php");
	require_once("../ForumModel.php");
	$test = new ForumModel();
	$iew = $test->obtainProfileInfo($_SESSION['username']);
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="../css/main.css">
			<link rel="stylesheet" href="../css/loginMain.css">
			<title><?php echo($_SESSION['username']);?> | The Forum</title><!-- obtaining the name of the user to be added to the title -->
		</head>
		<body>
<header>
<nav id="home_nav">
	<h1 id="logo"><a href="loginHome.php">The Forum</a></h1>
	<p id="saying">Your Favorite Artist, All The Time.</p>
	<ul id="navItems">
		<li><a href="logout.php">Logout</a></li>
		<li><a href="profile.php"><?php echo($_SESSION['username']);?></a></li><!-- obtaining the name of the user to be added for display on the profile -->

	</ul>
</nav>
</header>

<div id="container">


<h2 id="topArtistInfo">Info on your top artist <span id='userTopArtist'><?php echo($iew{"favArtist"});?></span>:</h2><!-- obtaining the users fav artist so that it can be displayed on the profile page -->

<!-- all of the info for topPics, topNews, and latesReviews will be added using jquery, and will be based on the users fav artist. -->

<div id="topPics">
	<h2 id="tPics">Latest Pictures:</h2>
</div><!-- ends top artist -->

<div id="topNews">
<h2 id='latestNewsLabel'>Latest News:</h2>
</div> <!-- ends topNews -->

<div id="latestReviews"><!-- might move latestReviews to it's own page -->
	<h2 id="reviewHead">Latest Album Reviews:</h2>
</div>
</div> <!-- Ends container -->

</div>
		<footer>
			<ul id="footer">
				<li><a href="loginHome.php">Home</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
			<p id="echo">Site powered by:</br><a href="http://the.echonest.com">echonest.com</a></p>
		</footer>

<script type="text/javascript" src="../js/jquery-1.10.1.js"></script>
<script type="text/javascript" src="../js/home_login.js"></script>