<?php
	require 'session_required.php';
	require 'connection.php';
	$id=$_GET['id'];
	$user->deleteProduct($id);
	header("location:inventory.php");

?>