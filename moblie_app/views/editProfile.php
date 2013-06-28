<?php

	require("../auth.php");
	session_start();
	echo (ini_set("display_errors", 1));
	require_once("../db.php");
	require_once("../ForumModel.php");
	$test = new ForumModel(MY_DSN, MY_USER, MY_PASS);
	$getInfo = $test->obtainProfileInfo($_SESSION['username']);
	
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/form.css">
	<title>Edit Profile</title>
</head>

<header>
<nav id="home_nav">
	<h1 id="logo"><a href="loginHome.php">The Forum</a></h1>
	<p id="saying">Your Favorite Artist, All The Time.</p>
	<ul id="navItems">
		<li><a href="loginHome.php">Home</a></li>
		<li><a href="albums.php">Albums</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="profile.php"><?php echo($_SESSION['username']);?></a></li>
	</ul>
</nav>
</header>
<div id="container">
<form action="" id="editProfile" method="post">
<?php 
	if(isset($_POST['submit'])){
		$try = $test->updateProfile($_POST['email'],$_POST['bio'],$_POST['artist'],$getInfo['userID']);
		$getInfo = $test->obtainProfileInfo($_SESSION['username']);
		echo("<h1 class='success'>Your Profile has been Updated ".$getInfo['firstName'].".</h3>");
	}
?>	

	<ul id="editForm">				
		<li><label for="email">Email:</label></li>
		<li><input type="email" name="email" id="email" value="<?php echo($getInfo['userEmail']);?>"/></li>
		
		<li><label for="FavoriteArtist">Your Favorite Artist:</label></li>
		<li><input type="text" name="artist" id="artist"value="<?php echo($getInfo['favArtist']);?>"/></li>
		
		<li><label for="bio">Tell Us a Little About You:</label></li>
		<li><input type="text" name="bio" id="bio" value="<?php echo($getInfo['userBio']);?>"/></li>
						
		<li><input type="submit" value="submit" name="submit" id="btn"/></li>
	</ul>
	
	<!-- the following php will obtain all of the information entered in the for and use that info to change the appropriate data in the database-->	
	</form>
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
</html>
