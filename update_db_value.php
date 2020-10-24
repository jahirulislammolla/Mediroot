<?php
require 'session_required.php';
require 'connection.php';
$invoice_table_list= $_POST['invoice_table_list'];
$invoice_product_table_list= $_POST['invoice_product_table_list'];
$customer_table_list= $_POST['customer_table_list'];
//echo "string";
//customer table list..........
$customer_company=$customer_table_list[0]['company_name'];
$customer_name=$customer_table_list[0]["customer_name"];
$customer_contact=$customer_table_list[0]["customer_contact"];
$customer_address=$customer_table_list[0]["customer_address"];
$invoice_customer_id=$user->addCustomer($customer_company,$customer_name,$customer_contact,$customer_address);

//"invoice_table_list":invoice_table_list ,"invoice_product_table_list":invoice_product_table_list ,"customer_table_list":customer_table_list,"total":total,"discount_total":discount_total,"invoice_discount":invoice_discount,"price":total-discount_total
// invoice table value.........
$invoice_date=$invoice_table_list[0]["invoice_date"];
$invoice_delivery_date=$invoice_table_list[0]["invoice_delivery_date"];
$invoice_mpo=$invoice_table_list[0]["invoice_mpo"];
$invoice_territory=$invoice_table_list[0]["invoice_territory"];
$invoice_total=$_POST["total"];
$invoice_discount=$_POST["invoice_discount"];
$invoice_discount_total=$_POST["discount_total"];
$invoice_price=$_POST["price"];
$invoice_id=$user->addInvoice($invoice_date,$invoice_delivery_date,$invoice_mpo,$invoice_territory,$invoice_discount,$invoice_discount_total,$invoice_total,$invoice_price,$invoice_customer_id);


//echo "string";
//product table every coloum............
for($i=0;$i<count($invoice_product_table_list);$i++)
{
	$invoice_product_id=$invoice_product_table_list[$i]["product_id"];
	$invoice_product_tp=$invoice_product_table_list[$i]["product_tp"];
	$invoice_product_quantity=$invoice_product_table_list[$i]["product_quantity"];
	$invoice_product_foc=$invoice_product_table_list[$i]["product_foc"];
	$user->addInvoiceProduct($invoice_id,$invoice_product_id,$invoice_product_quantity,$invoice_product_tp,$invoice_product_foc);
	$product_less=$invoice_product_quantity+$invoice_product_foc;
	$user->lessProduct($product_less,$invoice_product_id);
}
echo $invoice_id;
// header("location:final_invoice.php?id='$invoice_id'");
?>