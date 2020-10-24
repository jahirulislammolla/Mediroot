<?php 
	require 'session_required.php';
	unset($_SESSION['email']);
	unset($_SESSION['id']);
	session_destroy();

	header("Location:index.php");
	exit;


?>