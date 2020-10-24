<?php 
require 'session_required.php';
require 'connection.php';
$name=$_POST["name"];
$value=$_POST["value"];
$id=$_POST["id"];
$user->changeProduct($name,$value,$id);
echo $name;
echo $value;
?>
