<?php include './header.php'; ?>

<?php 
// Gender indicator 
$gender = 'Women';

// Fetch all products
$collection_items = [];

// Get all men items
foreach($product->getDataFromTable('product') as $item){
    if($item['product_category'] == 'Women'){
        $collection_items[] = $item;
    }
}
?>
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <a href="#">Collection</a>
                    <span>Women</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <?php include './components/collections/CollectionSidebar.php'; ?>
            <?php include './components/collections/CollectionItems.php'; ?>
        </div>
    </div>
</section>


<?php include './footer.php'; ?>