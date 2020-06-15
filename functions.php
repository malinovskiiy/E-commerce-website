<?php 

// Require database connection 
require './database/DBController.php';
require './database/Product.php';
require './database/Cart.php';

// DBController object
$db = new DBController(); 

// Product object
$product = new Product($db);

$product_array = $product->getDataFromTable('product');
$cart_array = $product->getDataFromTable('cart');

if(count($cart_array) == 0){
    $_COOKIE['subtotal'] = 0;
}

// Cart object
$Cart = new Cart($db);