<?php
//$sql_slider = "SELECT * FROM slider ORDER BY id DESC";
//$query_slider = mysqli_query($connect, $sql_slider);
include 'includes/header.php';
include 'includes/session.php';
include 'includes/menu.php';
if (isset($_GET['product'])) {
    $temp = $_GET['product'];
} else {
    $temp = '';
}
$sql_product = "select * from product where id='$temp'";
$query_product = mysqli_query($connect, $sql_product);
$row_product = mysqli_fetch_array($query_product);
//Nối bảng
$query_category_product = mysqli_query($connect, "select *, category.name as name_product from category right join product on category.id = product.id_category where product.id = '$temp'");
$row_category_product = mysqli_fetch_array($query_category_product);
?>
<div class="container">

    <div class="product_dt">
        <div class="row">
            <div class="col-5" style="text-align: center">
                <img src="./images/products/<?php echo $row_product['image']; ?>" alt="" width="100%">
            </div>
            <div class="col-5">
                <div class="product-details">
                    <h3><?php echo $row_product['name']; ?></h3>
                    <p style="color: red;">Giá : <?php echo number_format($row_product['price']); ?><sup>đ</sup></p>
                    <p>Danh mục : <?php echo $row_category_product['name_product'];  ?></p>
                    <p>Đặc tả </p>
                    <br>
                    <p style="font-size: 0.7rem;color: #232020"><?php echo $row_product['details']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

