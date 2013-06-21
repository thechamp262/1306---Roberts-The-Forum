<?php

	require("../auth.php");
	session_start();
	echo (ini_set("display_errors", 1));
	require_once("../db.php");
	require_once("../ForumModel.php");
	$test = new ForumModel(MY_DSN, MY_USER, MY_PASS);
	
	$getInfo = $test->obtainProfileInfo($_SESSION['username']);
	
	if(isset($_POST['submit'])){
		$try = $test->updateProfile($_POST['email'],$_POST['bio'],$_POST['artist'],$getInfo['userID']);
		$getInfo = $test->obtainProfileInfo($_SESSION['username']);
		echo("<h1 id='success'>Your Profile has been Updated ".$getInfo['firstName'].".</h3>");
		echo($getInfo['userID']);
		echo($try);

	}
?>

<header>
<nav id="home_nav">
	<h1><a href="loginHome.php">The Forum</a></h1>
	<ul>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="profile.php"><?php echo($_SESSION['username']);?></a></li>
		<!--<input type="search" name="search" placeholder="Search Artist"/>-->
	</ul>
</nav>
</header>

<form action="" id="editProfile" method="post">
	<ul id="editForm">				
		<li><label for="email">Email:</label></li>
		<li><input type="email" name="email" id="email" value="<?php echo($getInfo['userEmail']);?>"/></li>
		
		<li><label for="FavoriteArtist">Your Favorite Artist:</label></li>
		<li><input type="text" name="artist" id="artist"value="<?php echo($getInfo['favArtist']);?>"/></li>
		
		<li><label for="bio">Tell Us a Little About You:</label></li>
		<li><input type="text" name="bio" id="bio" value="<?php echo($getInfo['userBio']);?>"/></li>
						
		<li><input type="submit" value="submit" name="submit"/></li>
	</ul>		
</form>

