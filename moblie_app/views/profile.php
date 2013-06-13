<?php
	require("../auth.php");
	session_start();
?>


<header>
<nav id="home_nav">
	<h1><a href="../index.php">The Forum</a></h1>
	<ul>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="profile.php">Profile</a></li>
		<input type="search" name="search" placeholder="Search Artist"/>
	</ul>
</nav>
</header>

<div id="typeExample">
	<h2 id="artistList">Favorite Artist</h3>
	<ul>
		<li>Eminem</li>
		<li>Jay-z</li>
		<li>Kid Rock</li>
		<li>Adele</li>
	</ul>
</div><!-- ends typeExampl -->

<section id="userInfo">
	<img id="profilePic" src="#" width="#" height="#"/>
	<h1><?php  echo("<h1 id='userName'>".$_SESSION['username']."</h1>");?></h1>
	<p><a href="#">Edit Profile</a></p>
</section>

<div id="topArtist">
	<h2 id="tArtist">Top Artist:</h2>
</div><!-- ends top artist -->

<div id="topNews">
	<h2 id="latestReviewsLabel">Latest News:</h2>
</div> <!-- ends topNews -->

<div id="latestReviews">
	<h2 id="latestReviewsLabel">Latest Reviews:</h2>
</div> <!-- ends topNews -->

<?php

	

?>
