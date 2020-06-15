<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pillow Mart</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <?php
    // Require all functions(database, etc.)
    require './functions.php';
    ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <a href="./login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <form action="#" class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="./cart.php">
                                    <i class="icon_bag_alt"></i>
                                    <span><?php echo count($product->getDataFromTable('cart')) ?></span>
                                </a>
                                <!-- <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <?php foreach ($product->getDataFromTable('cart') as $item) :
                                                    $cart = $product->getProductById($item['product_id']);
                                                    $subtotalPopup[] = array_map(function ($item) { ?>
                                                        <tr>
                                                            <td class="si-pic"><img src="<?php echo $item['product_image'] ?>" alt=""></td>
                                                            <td class="si-text">
                                                                <div class="product-selected">
                                                                    <p>$<?php echo $item['product_price'] ?> x 1</p>
                                                                    <h6><?php echo $item['product_name'] ?></h6>
                                                                </div>
                                                            </td>
                                                            <td class="si-close">
                                                                <form method="post">
                                                                    <input type="hidden" value="<?php echo $item['product_id']; ?>" name="product_id_popup">
                                                                    <button type="submit" class="bg-transparent border-0" name="delete-item-submit-popup"><i class="ti-close"></i></button> </form>
                                                            </td>
                                                        </tr>
                                                <?php
                                                        return $item['product_price'];
                                                    }, $cart);
                                                endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total (<?php echo isset($subtotalPopup) ? count($subtotalPopup) : 0; ?> items):</span>
                                        <h5>
                                            <span>$</span>
                                            <span class="deal-price">
                                                <?php echo isset($subtotalPopup) ? $Cart->calculateSubtotal($subtotalPopup) : 0 ?>
                                            </span>

                                        </h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./cart.php" class="primary-btn view-card">VIEW CART</a>
                                        <a href="./checkout.php" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div> -->
                            </li>
                            <li class="cart-price ">$<span class="deal-price"><?php echo !empty($_COOKIE) ?  $_COOKIE['subtotal'] : 0; ?></span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Categories</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="./womenCollection.php">Women’s Clothing</a></li>
                            <li><a href="./menCollection.php">Men’s Clothing</a></li>
                            <li><a href="./kidsCollection.php">Kid's Clothing</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./shop.php">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="./menCollection.php">Men's</a></li>
                                <li><a href="./womenCollection.php">Women's</a></li>
                                <li><a href="./kidsCollection.php">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.php">Blog</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.php">Blog Details</a></li>
                                <li><a href="./cart.php">Shopping Cart</a></li>
                                <li><a href="./checkout.php">Checkout</a></li>
                                <li><a href="./faq.php">Faq</a></li>
                                <li><a href="./register.php">Register</a></li>
                                <li><a href="./login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->