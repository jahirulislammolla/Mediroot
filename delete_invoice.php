<?php 
	require 'session_required.php';
	require 'connection.php';
	$id = $_GET['id'];
	$user->deleteInvoice($id);
	$user->deleteInvoiceProducts($id);
	header("location:all_invoice.php");

?>