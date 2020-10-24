<?php
require 'session_required.php';
require 'connection.php';
$invoice_table_list= $_POST['invoice_table_list'];

$customer_table_list= $_POST['customer_table_list'];
echo "string";
// invoice table value.........
$invoice_date=$invoice_table_list[0]["invoice_date"];
$invoice_delivery_date=$invoice_table_list[0]["invoice_delivery_date"];
$invoice_mpo=$invoice_table_list[0]["invoice_mpo"];
$invoice_territory=$invoice_table_list[0]["invoice_territory"];
$invoice_subtotal_without_foc=$_POST["subtotal_without_foc"];

$invoice_discount=$_POST["invoice_discount"];
$invoice_discount_total=$_POST["discount_total"];
$invoice_foc_subtotal=$_POST["fos_subtotal"];
$invoice_total=$_POST["total"];
$user->addInvoice($invoice_date,$invoice_delivery_date,$invoice_mpo,$invoice_territory,$invoice_subtotal_without_foc,$invoice_discount,$invoice_discount_total,$invoice_foc_subtotal,$invoice_total,$invoice_customer_id);
echo "string";
//customer table list..........
$customer_name=$customer_table_list[0]["customer_name"];
$customer_contact=$customer_table_list[0]["customer_contact"];
$customer_address=$customer_table_list[0]["customer_address"];
echo "string";
//product table value......




?>