<?php
session_start();


$item_id = $_GET['item_id'];

$_SESSION['subtotal'] += $_GET['item_price'];
$_SESSION['total'] = $_SESSION['subtotal'] + 1200 + 300;

array_push($_SESSION['cart'],$item_id);


header('Location: shop.php');

?>