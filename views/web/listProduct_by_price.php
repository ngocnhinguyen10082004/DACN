<?php
include '../../Classes/web/product.php';
$product = new product();
$option = $_POST['option'];
$listProducts = $product->getProduct_by_price($option);
if ($listProducts) {
    foreach ($listProducts as $data) {
?>
        <div class="col l-2-4 m-4 c-6">
            <a class="product-item" href="product-detail.php?idProduct=<?php echo $data['IdProduct'] ?>&idCate=<?php echo $data['IdCategory'] ?>">
                <div class="product-item__img" style="background-image: url('<?php echo '../../public/web/img/products/' . $data['ProductImg1'] ?>');"></div>
                <h4 class="product-item__name"><?php echo $data['NameProduct'] ?></h4>
                <div class="product-item__price">
                    <?php 
                        echo '<span class="product-item__price-current">' . $data['Price'] . 'đ</span>';
                    ?>
                </div>
                <div class="product-item__action">
                    <span class="product-item__like product-item__like--liked">
                        <i class="product-item__like-icon--empty far fa-heart"></i>
                        <!-- <i class="product-item__like-icon--fill fas fa-heart"></i> -->
                    </span>
                    <div class="product-item__rating">
                        <!-- <i class="product-item__star--gold fas fa-star"></i>
                        <i class="product-item__star--gold fas fa-star"></i>
                        <i class="product-item__star--gold fas fa-star"></i>
                        <i class="product-item__star--gold fas fa-star"></i>
                        <i class="fas fa-star"></i> -->
                    </div>

                    <span class="product-item__sold"><?php echo $data['TotalSold'] ?> đã bán</span>
                </div>
                <div class="product-item__origin">
                    <span class="product-item__brand"><?php echo $data['NameSupplier'] ?></span>
                    <span class="product-item__origin-name">Việt Nam</span>
                </div>
            </a>
        </div>
<?php
    }
}
?>