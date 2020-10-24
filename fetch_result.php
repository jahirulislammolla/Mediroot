<?php
	require 'session_required.php';
	require 'connection.php';

	
	$product_generic_name = $_POST['product_generic_name'];
	$product_pack_size = $_POST['product_pack_size'];
	// echo $product_generic_name;
	// echo $product_pack_size;
	$result = $user->getSearchedProductsByGP($product_generic_name,$product_pack_size);
	// var_dump($result);
	$m=['product_id','product_brand_name','product_generic_name','product_quantity','product_tp','product_foc_of','product_foc',"foc"];
	$i=0;
	 for($i=0;$i<7;$i++) {
		echo $result[0][$m[$i]]."*";
	}
?>