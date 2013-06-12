<?php

	echo (error_reporting(E_ALL));
	echo (ini_set("display_errors", 1));
	
	require_once("PageView.php");
	
	$view = new PageView();
	
	$view->showHeader();
	$view->showHome();
	$view->showFooter();
	

?>