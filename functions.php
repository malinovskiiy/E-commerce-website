<?php 

// Require database connection 
require './database/DBController.php';
require './database/Product.php';

// DBController object
$db = new DBController(); 

// Product object
$product = new Product($db);


// Test if data fetched or not

// print_r('<pre>');
// print_r($product->getDataFromTable('product'));
// print_r('</pre>');

// End test