<?php
session_start();

//echo (ini_set("display_errors", 1));

require_once("../ForumModel.php");
require_once("../db.php");
require_once("header.inc");

$results = "";

if(isset($_POST["submit"])){
	if(!empty($_POST["userName"]) && !empty($_POST["pass"])){
		$model = new ForumModel(MY_DSN, MY_USER, MY_PASS);
		$results = $model->userLogin($_POST["userName"],$_POST["pass"]);
		echo($results);
		if($results){
			$_SESSION["Authenticated"] = 1;
			header("Location: profile.php");
		}else{
			$_SESSION["Authenticated"] = 0;	
			echo("<h1 class='error'>Your User Name and/or Password is incorrect</h1>");
		}
	}
}
?>

	<form action="" id="loginForum" method="post">
		<ul id="lForm">
			<li><label for="userName">UserName:</label></li>
			<li><input type="text" name="userName" id="userName"/></li>
					
			<li><label for="pass">Password:</label></li>
			<li><input type="password" name="pass" id="pass"/></li>
			
			<li><input type="submit" value="Login" name="submit"/></li>
		</ul>		
	</form>
	
		<footer>
			<ul id="footer">
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
		</footer>
	</body>
</html>

