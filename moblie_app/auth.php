<?php

session_start();

if(!isset($_SESSION["Authenticated"]) || ($_SESSION["Authenticated"] != 1))
{
	header("Location: ../index.php");
	exit();
}

?>