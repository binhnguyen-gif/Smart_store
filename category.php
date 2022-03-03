<?php
//$sql_slider = "SELECT * FROM slider ORDER BY id DESC";
//$query_slider = mysqli_query($connect, $sql_slider);
include 'includes/header.php';
include 'includes/session.php';
include 'includes/menu.php';
if (isset($_GET['category'])) {
    $temp = $_GET['category'];
} else {
    $temp = '';
}
$query_category = mysqli_query($connect, "select * from category where id = '$temp'");
while ($row_category_query = mysqli_fetch_array($query_category)) {
    $id_category = $row_category_query['id'];
    ?>
    <div class="container product">
        <div class="row">
            <div class="col-12">
                <h3 class="product-title">
                    <?php echo $row_category_query['name']; ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <?php
            $sql_product = "select * from product where id_category = '$id_category'";
            $query_product = mysqli_query($connect, $sql_product);
            while ($row_product = mysqli_fetch_array($query_product)) { ?>
                <div class="col-3">
                    <div class="product-hu">
                        <a href="product.php?product=<?php echo $row_product['id']; ?>">
                            <div class="product-hu__image"
                                 style="background-image: url('./images/products/<?php echo $row_product['image']; ?>');"></div>
                            <div class="product-detail">
                                <p class="product-text"><?php echo $row_product['name']; ?></p>
                                <div class="price-product">
                                    <span class="price-normal"><?php echo $row_product['price']; ?><sup>đ</sup></span>
                                    <span class="price-promotion">20,400,000 <sup>đ</sup></span>
                                </div>
                            </div>
                        </a>
                        <div class="product-hut">
                            <a href="add_to_cart.php?link=<?php echo $row_product['link'] ?>" class="product-hut__link" style="text-align: center" ;>Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<?php include 'includes/footer.php'; ?>