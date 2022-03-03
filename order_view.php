<?php
require_once "includes/header.php";
require_once "db.php";
?>

<body>
<?php
require_once "includes/menu.php";
?>
<div class="container ">
    <div class="row">
        <div class="col-12">
            <h3 class="product-title">
                Thanh toán
            </h3>
        </div>
    </div>
    <form action="" id="view_cart" method="post">
        <table width="100%" border="1" cellspacing="">
            <tr align="center">
                <td>Sản phẩm</td>
                <td>Hình ảnh</td>
                <td>Giá thành</td>
                <td>Số lượng</td>
                <td>Tổng tiền</td>
            </tr>
            <?php
            if(isset($_COOKIE['order'])){
                $total_price = 0;
                foreach(unserialize($_COOKIE['order']) as $link_product => $quantity){
                    $sql = "SELECT * FROM product WHERE link = '$link_product'";
                    $result = mysqli_query($connect, $sql);
                    foreach ($result as $product){
                        $total_price+= $product['price'] * $quantity;
                        ?>
                        <tr align="center">
                            <td><?php echo $product['name'] ?></td>
                            <td>
                                <img src="./admin/san-pham/photos/<?php echo $product['image'] ?>" alt="" height="100">
                            </td>
                            <td><?php  echo number_format($product['price'], 0 ,",",",")?></td>
                            <td><?php echo $quantity ?></td>
                            <td><?php  echo number_format($product['price'] * $quantity, 0 ,",",",")?></td>
                        </tr>
                        <?php
                    }

                }
            }
            ?>
            <tr align="center">
                <td colspan="8"> Thành tiền: <?php echo number_format($total_price, 0 ,",",",") ?></td>
            </tr>
        </table>
        <div class="check-out">
            <button type="submit" class="btn search submit" name="order">Đặt hàng</button>
        </div>
    </form>
</div>
<?
require_once "includes/footer.php";
?>
</body>

</html>