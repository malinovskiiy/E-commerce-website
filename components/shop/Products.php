<?php
$product_array = $product->getDataFromTable('product');
?>

<div class="col-lg-9 order-1 order-lg-2">
    <div class="product-show-option">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div class="select-option">
                    <select class="sorting-price form-control">
                        <option value="" data-sort-value="original-order">Default</option>
                        <option value="" data-sort-value="price">Price up</option>
                        <option value="">Price down</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="product-list">
        <div class="row grid">
            <?php foreach ($product_array as $item) : ?>
                <div class="col-lg-4 col-sm-6 grid-item <?php echo $item['product_brand'] ?> <?php echo $item['product_category'] ?> <?php echo $item['product_color'] ?>">
                    <div class="product-item">
                        <div class="pi-pic">
                            <a href="<?php printf('./%s?product_id=%s','product.php', $item['product_id']); ?>">  <img src="<?php echo $item['product_image']; ?>" alt=""></a> 
                            <?php if ($item['product_price'] < 40) : ?>
                                <div class="sale pp-sale">Sale</div>
                            <?php endif; ?>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name"><?php echo $item['product_category']; ?></div>
                            <a href="./product.php">
                                <h5><?php echo $item['product_name']; ?></h5>
                            </a>
                            <div class="product-price">
                                $ <span><?php echo $item['product_price']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>