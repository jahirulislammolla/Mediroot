<?php
	require 'session_required.php';
	require 'connection.php';

	
	$customer_name = $_POST['customer_name'];
	$customer_contact = $_POST['customer_contact'];
	$customer_address = $_POST['customer_address'];
	$customer_address = $_POST['customer_address'];

	$result = $user->getSearchedProductsByGP($product_generic_name,$product_pack_size);
	
?>