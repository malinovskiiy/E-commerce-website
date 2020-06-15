<?php
require '../database/DBController.php';
require '../database/Product.php';

// DBController object
$db = new DBController(); 

// Product object
$product = new Product($db);

if(isset($_POST['itemid'])){
    echo json_encode($product->getProductById($_POST['itemid']));
}

if(isset($_POST['total'])){
    setcookie('total-price', $_POST['total'], time()+3600, '/');
}