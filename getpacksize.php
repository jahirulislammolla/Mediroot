<?php
	require 'session_required.php';
	require 'connection.php';

	
	$product_generic_name = $_POST['product_generic_name'];
	$result = $user->getPackSizeFromG($product_generic_name);
	//var_dump($result);
	foreach($result as $value)
	{
		echo $value['product_pack_size']."*";
	}
	
?>