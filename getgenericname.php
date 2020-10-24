<?php
	require 'session_required.php';
	require 'connection.php';

	
	$product_generic_name = $_POST['product_generic_name'];

	$result = $user->getGenericName($product_generic_name);
	foreach ($result as $value) {
		echo $value['product_brand_name']."*";
	}
	
?>