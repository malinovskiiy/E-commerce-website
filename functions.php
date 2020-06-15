<?php 

// Require database connection 
require './database/DBController.php';
require './database/Product.php';
require './database/Cart.php';

// DBController object
$db = new DBController(); 

// Product object
$product = new Product($db);

// Cart object0
$Cart = new Cart($db);