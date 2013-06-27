<?php
	//echo (error_reporting(E_ALL));
	echo (ini_set("display_errors", 1));

	require_once("../db.php");
	require_once("../ForumModel.php");
	
	$model = new ForumModel();	
?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="../css/main.css">
			<link rel="stylesheet" href="../css/form.css">
			<title></title>
		</head>
<body>

<header>
<nav id="home_nav">
	<h1 id="logo"><a href="../index.php">The Forum</a></h1>
	<p id="saying">Your Favorite Artist, All The Time.</p>
	<ul id="navItems">
		<li><a href="../index.php">Home</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="join.php">Join</a></li>
		<!--<input type="search" name="search" placeholder="Search Artist"/>-->
	</ul>
</nav>
</header>

<div id="container">
<!-- photos for top artist being obtained from jquery grabPics function -->
<div id="topArtist1">
</div><!-- ends top artist -->

<!-- all info that the user input into this form will be used by the php above -->
<form action="" id="joinForum" method="post">
	<ul id="jForm">
		<li><label for="userName">UserName:</label></li>
		<li><input type="text" name="userName" id="userName"/></li>
		
		<li><label for="firstName">First Name:</label></li>
		<li><input type="text" name="firstName" id="firstName"/></li>
		
		<li><label for="email">Email:</label></li>
		<li><input type="email" name="email" id="email"/></li>
		
		<li><label for="FavoriteArtist">Your Favorite Artist:</label></li>
		<li><input type="text" name="artist" id="artist"/></li>
		
		<li><label for="pass">Password:</label></li>
		<li><input type="password" name="pass" id="pass"/></li>
		
		<li><label for="passCon">Conform Password:</label></li>
		<li><input type="password" name="passCon" id="passCon"/></li>
		
		<li><input type="submit" value="submit" name="submit" id="subbtn"/></li>
	</ul>
	<p><a href="login.php">Already a member?<br/>Login Now!</a></p>		
	<?php 
	
		/* Gathering all of the information that the user is typing into the 
	form at sending it to the ForumModel joinSite Method if all parameters are met*/
	if(isset($_POST["submit"])){
		$userName = $_POST["userName"];
		$email = $_POST["email"];
		$favArtist = $_POST["artist"];
		$password = $_POST["pass"];
		$passCon = $_POST["passCon"];
		$firstName = $_POST["firstName"];
		
		if(!empty($userName) && !empty($email) && !empty($favArtist) && !empty($password) && !empty($passCon) && !empty($firstName)){
		
		if($password == $passCon){
		
			$check = $model->checkUserNameID($userName);/*********if $check comes back true the user will
			be added to the data base if not they will recieve an error messge*********/
			
			if($check){
			$model->joinSite($userName, $email, $password, $favArtist, $firstName);
			echo("<h1 class='success'>Welcome to The Forum ".$userName."</h1>");
			}else{
				echo("<h3 id='error'>Sorry that username already exist!</h3>");	
			}
		}else{
			echo("<h3 class='error'>OOPS. Your passwords don't match.</h3>");	
		}	
		}else{
			echo("<h3 class='error'>Please fill out all fields!</h3>");
		};
	};
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
		<script type="text/javascript" src="../js/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>
	</body>
</html>

