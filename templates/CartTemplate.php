 <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['delete-item-submit'])) {
            $deletedrecord = $Cart->deleteCartItem($_POST['product_id']);
        }
    }
    ?>
 <!-- Shopping Cart Section Begin -->
 <section class="shopping-cart spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="cart-table">
                     <table>
                         <thead>
                             <tr>
                                 <th>Image</th>
                                 <th class="p-name" style="padding-left: 1em;">Product Name</th>
                                 <th>Price</th>
                                 <th>Quantity</th>
                                 <th>Total</th>
                                 <th><i class="ti-close"></i></th>
                             </tr>
                         </thead>
                         <tbody>
                             <!-- cart item -->
                             <?php
                                foreach ($product->getDataFromTable('cart') as $item) :
                                    $cart = $product->getProductById($item['product_id']);
                                    $subtotal[] = array_map(function ($item) {
                                ?>
                                     <tr>
                                         <td class="cart-pic first-row"><img src="<?php echo $item['product_image']; ?>" alt=""></td>
                                         <td class="cart-title first-row">
                                             <h5 style="margin-left: 1em;"><?php echo $item['product_name']; ?></h5>
                                         </td>
                                         <td class="p-price first-row">$<?php echo $item['product_price']; ?></td>
                                         <td class="qua-col first-row">
                                             <div class="quantity">
                                                 <div class="pro-qty">
                                                     <button class="  qtybtn qty-down bg-transparent border-0" data-id="<?php echo $item['product_id'] ?? '0'; ?>">-</button>
                                                     <input type="text" class="qty-input" value="1" data-id="<?php echo $item['product_id'] ?? '0'; ?>">
                                                     <button class="qtybtn qty-up bg-transparent border-0" data-id="<?php echo $item['product_id'] ?? '0'; ?>">+</button>
                                                 </div>
                                             </div>
                                         </td>
                                         <td class="total-price first-row" >$ <span class="product-total-price" data-id="<?php echo $item['product_id'] ?? '0'; ?>"><?php echo $item['product_price']; ?></span></td>
                                         <td class="close-td first-row">
                                             <form method="post">
                                                 <input type="hidden" value="<?php echo $item['product_id']; ?>" name="product_id">
                                                 <button type="submit" class="bg-transparent border-0" name="delete-item-submit"><i class="ti-close"></i></button> </form>
                                         </td>
                                     </tr>
                             <?php return $item['product_price'];
                                    }, $cart);

                                endforeach;
                                ?>
                         </tbody>
                     </table>
                 </div>
                 <div class="row">
                     <div class="col-lg-4">
                         <div class="cart-buttons">
                             <a href="./shop.php" class="primary-btn continue-shop">Continue shopping</a>
                             <a href="./cart.php" class="primary-btn up-cart">Update cart</a>
                         </div>
                         <div class="discount-coupon">
                             <h6>Discount Codes</h6>
                             <form action="#" class="coupon-form">
                                 <input type="text" placeholder="Enter your codes">
                                 <button type="submit" class="site-btn coupon-btn">Apply</button>
                             </form>
                         </div>
                     </div>
                     <div class="col-lg-4 offset-lg-4">
                         <div class="proceed-checkout">
                             <ul>
                                <li class="subtotal">
                                    Subtotal (<?php echo isset($subtotal) ? count($subtotal) : 0; ?> items)      
                                    <span>$
                                        <span class="deal-price">
                                        <?php echo !empty($_COOKIE) ?  $_COOKIE['subtotal'] : 0; ?>
                                        </span>
                                    </span>
                                </li>
                                 <li class="cart-total">
                                    Total 
                                    <span>$
                                        <span class="deal-price">
                                        <?php echo !empty($_COOKIE) ?  $_COOKIE['subtotal'] : 0; ?>
                                        </span>
                                    </span>
                                </li>
                             </ul>
                             <a href="./checkout.php" class="proceed-btn">PROCEED TO CHECK OUT</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Shopping Cart Section End -->