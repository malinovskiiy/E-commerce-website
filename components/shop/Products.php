<?php
$product_array = $product->getDataFromTable('product');

// request post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Cart->addToCart($_POST['user_id'], $_POST['product_id']);
    
}
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
                            <a href="<?php printf('./%s?product_id=%s', 'product.php', $item['product_id']); ?>"> <img src="<?php echo $item['product_image']; ?>" alt=""></a>
                            <?php if ($item['product_price'] < 40) : ?>
                                <div class="sale pp-sale">Sale</div>
                            <?php endif; ?>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active">
                                    <form method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                                        <input type="hidden" name="user_id" value="2">

                                        <?php
                                        if (in_array($item['product_id'], $Cart->getCartId($product->getDataFromTable('cart')) ?? [])) {
                                            echo '<a href="#" style="pointer-events: none; background: green;" onclick="this.parentNode.submit();" name="product_add_to_cart"><i class="icon_bag_alt"></i></a>';
                                        } else {
                                            echo '<a href="#" style="cursor: pointer;" onclick="this.parentNode.submit();" name="product_add_to_cart"><i class="icon_bag_alt"></i></a>';
                                        }
                                        ?>
                                        
                                    </form>
                                </li>
                                <li class="quick-view">
                                <?php
                                        if (in_array($item['product_id'], $Cart->getCartId($product->getDataFromTable('cart')) ?? [])) {
                                            echo '<a href="#" style="pointer-events: none;">In the cart</a>';
                                        } else {
                                            echo '<a href="#">+ Add to cart</a>';
                                        }
                                        ?>
                                    
                                </li>

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