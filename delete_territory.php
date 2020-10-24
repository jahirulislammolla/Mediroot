<?php 
	require 'session_required.php';
	require 'connection.php';
	$id = $_GET['id'];
	$user->deleteTerritory($id);
	header("location:all_territory.php");

?>