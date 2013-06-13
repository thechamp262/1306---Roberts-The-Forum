<?php
	//echo (error_reporting(E_ALL));
	echo (ini_set("display_errors", 1));

	require_once("../PageView.php");
	require_once("../db.php");
	require_once("../ForumModel.php");
	
	$model = new ForumModel(MY_DSN, MY_USER, MY_PASS);	
	$view = new PageView();
	
	$view->showHeader();	
	/* Gathering all of the information that the user is typing into the 
	form at sending it to the ForumModel joinSite Method if all parameters are met*/
	if(isset($_POST["submit"])){
		$userName = $_POST["userName"];
		$email = $_POST["email"];
		$favArtist = $_POST["artist"];
		$password = $_POST["pass"];
		$passCon = $_POST["passCon"];
		
		if(!empty($userName) && !empty($email) && !empty($favArtist) && !empty($password) && !empty($passCon)){
		
		if($password == $passCon){
			$model->joinSite($userName, $email, $password, $favArtist);
			echo("<h1 class='success'>Welcome to The Forum ".$userName."</h1>");
		}else{
			echo("<h1 class='error'>OOPS. Your passwords don't match.</h1>");
		}
				
		}else{
			echo("<h1 class='error'>Please fill out all fields!</h1>");
		};
	};


?>
<header>
<nav id="home_nav">
	<h1><a href="../index.php">The Forum</a></h1>
	<ul>
		<li><a href="#">Login</a></li>
		<li><a href="views/join.php">Join</a></li>
	</ul>
</nav>
</header>

<form action="" id="joinForum" method="post">
	<ul id="jForm">
		<li><label for="userName">UserName:</label></li>
		<li><input type="text" name="userName" id="userName"/></li>
		
		<li><label for="email">Email:</label></li>
		<li><input type="email" name="email" id="email"/></li>
		
		<li><label for="FavoriteArtist">Your Favorite Artist:</label></li>
		<li><input type="text" name="artist" id="artist"/></li>
		
		<li><label for="pass">Password:</label></li>
		<li><input type="password" name="pass" id="pass"/></li>
		
		<li><label for="passCon">Conform Password:</label></li>
		<li><input type="password" name="passCon" id="passCon"/></li>
		
		<li><input type="submit" value="submit" name="submit"/></li>
	</ul>		
</form>
<p><a href="login.php">Already a member?<br/>Login!</a></p>

<footer>
			<ul id="footer">
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
		</footer>
		<script type="text/javascript" src="../js/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>
	</body>
</html>

