<?php 


$products = "SELECT * FROM products";
$allproducts = fetch_all($products);

$pets = "SELECT * FROM products WHERE category = 'pets'";
$pet_r = fetch_all($pets);
$toys = "SELECT * FROM products WHERE category = 'toys'";
$toys_r = fetch_all($toys);
$yum = "SELECT * FROM products WHERE category = 'food'";
$food_r = fetch_all($yum);

?>