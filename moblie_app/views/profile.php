<?php
	require("../auth.php");
	session_start();

	require_once("../db.php");
	require_once("../ForumModel.php");
	$test = new ForumModel();
	$iew = $test->obtainProfileInfo($_SESSION['username']);//gathering all of the users info based on their username
?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="../css/main.css">
			<link rel="stylesheet" href="../css/profile.css">
			<title></title>
		</head>
		<body>

<header>
<nav id="home_nav">
	<h1 id="logo"><a href="loginHome.php">The Forum</a></h1>
	<p id="saying">Your Favorite Artist, All The Time.</p>
	<ul id="navItems">
		<li><a href="logout.php">Logout</a></li>
		<li><a href="profile.php"><?php echo($_SESSION['username']);?></a></li>
	</ul>
</nav>
</header>

<section id="userInfo">
<h1 id="name"><?php  echo($iew['firstName']);?></h1>
	<img id="profilePic" src="../placeholderPic.png" width="#" height="#"/>
		<p id="favArt"><?php echo($iew['firstName']);?>'s Favorite Artist: <?php echo($iew['favArtist']);?></p>
		<p id="editLink"><a href="editProfile.php">Edit Profile</a></p>
</section>

<div id="typeExample">
	
</div><!-- ends typeExampl -->


<div id="typeExample">
</div><!-- ends typeExampl -->


<div id="userBio">
	<h2 id="bio">A little about <?php echo($iew['firstName']);?>:</h2>
	<p id="theBio"><?php echo($iew['userBio']);?></p>
</div> <!-- ends topNews -->

<footer>
			<ul id="footer">
				<li><a href="loginHome.php">Home</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
		</footer>
	</body>
</html>

