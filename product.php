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
?>
<div class="container">
    <div class="row">
        <div class="col-5" style="text-align: center">
            <img src="./images/products/<?php echo $row_product['image']; ?>" alt="" >
        </div>
        <div class="col-5">
            <div class="product-details">
                <h3><?php echo $row_product['name']; ?></h3>
                <p style="color: red;">Giá : <?php echo number_format($row_product['price']); ?><sup>đ</sup></p>
                <p>Danh mục : </p>
                <p>Đặc tả </p>
                <br>
                <p><?php echo $row_product['details']; ?></p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

