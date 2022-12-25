<?php
session_start();

unset($_SESSION['cart'][$_GET['key']]);

$_SESSION['subtotal'] -= $_GET['item_price'];
$_SESSION['total'] -= $_GET['item_price'];

header('Location: cart.php');

?>