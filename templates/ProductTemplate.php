<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.php">Shop</a>
                    <span>Detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<?php
$product_id = $_GET['product_id'];

foreach ($product->getDataFromTable('product') as $item) :
    if ($item['product_id'] == $product_id) :
?>
        <!-- Product Shop Section Begin -->
        <section class="product-shop spad page-details">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-pic-zoom">
                                    <img class="product-big-img" src="<?php echo $item['product_image']; ?>" alt="">
                                    <div class="zoom-icon">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                                <div class="product-thumbs">
                                    <div class="product-thumbs-track ps-slider owl-carousel">
                                        <div class="pt active" data-imgbigurl="<?php echo $item['product_image']; ?>"><img src="<?php echo $item['product_image']; ?>" alt=""></div>
                                        <div class="pt" data-imgbigurl="<?php echo $item['product_image']; ?>"><img src="<?php echo $item['product_image']; ?>" alt=""></div>
                                        <div class="pt" data-imgbigurl="<?php echo $item['product_image']; ?>"><img src="<?php echo $item['product_image']; ?>" alt=""></div>
                                        <div class="pt" data-imgbigurl="<?php echo $item['product_image']; ?>"><img src="<?php echo $item['product_image']; ?>" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-details">
                                    <div class="pd-title">
                                        <span><?php echo $item['product_brand']; ?></span>
                                        <h3><?php echo $item['product_name']; ?></h3>
                                        <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                    </div>
                                    <div class="pd-desc">
                                        <p><?php echo $item['product_info']; ?></p>
                                        <h4>$<?php echo $item['product_price']; ?></h4>
                                    </div>
                                    <div class="pd-color">
                                        <h6>Color</h6>
                                        <div class="pd-color-choose">
                                            <div class="cc-item">
                                                <input type="radio" id="cc-<?php echo $item['product_color']; ?>">
                                                <label for="cc-<?php echo $item['product_color']; ?>" class="cc-<?php echo $item['product_color']; ?>"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                        <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                    </div>
                                    <ul class="pd-tags">
                                        <li><span>CATEGORIES</span>: <?php echo $item['product_category']; ?></li>
                                    </ul>
                                    <div class="pd-share">
                                        <div class="p-code">Sku : <?php echo $item['product_id']; ?></div>
                                        <div class="pd-social">
                                            <a href="#"><i class="ti-facebook"></i></a>
                                            <a href="#"><i class="ti-twitter-alt"></i></a>
                                            <a href="#"><i class="ti-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab">
                            <div class="tab-item">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab-2" role="tab">SPECIFICATIONS</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-item-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                        <div class="product-content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <h5>Introduction</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                                    <h5>Features</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                                </div>
                                                <div class="col-lg-5">
                                                    <img src="<?php echo $item['product_image']; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                        <div class="specification-table">
                                            <table>
                                                <tr>
                                                    <td class="p-catagory">Price</td>
                                                    <td>
                                                        <div class="p-price">$<?php echo $item['product_price']; ?></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Size</td>
                                                    <td>
                                                        <div class="p-size">S M L XXL</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Color</td>
                                                    <td><span class="cs-color"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Sku</td>
                                                    <td>
                                                        <div class="p-code"><?php echo $item['product_id']; ?></div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endif;
endforeach; ?>