<?php
echo (ini_set("display_errors", 1));
session_start();

session_unset();

header("Location: ../index.php");

?>