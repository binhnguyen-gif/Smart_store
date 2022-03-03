<?php
require_once "includes/header.php";
require_once "db.php";
?>


<body>
<?php
require_once "includes/menu.php";
?>
<div class="container ">
    <form action="order.php" id="view_cart" method="post">
        <table width="100%" border="1">
            <tr align="center">
                <td>Sản phẩm</td>
                <td>Tên</td>
                <td>Ảnh</td>
                <td>Giá thành</td>
                <td>Số lượng</td>
                <td>Tổng tiền</td>
                <td>Xóa khỏi giỏ hàng</td>
            </tr>
            <?php
            if(isset($_COOKIE['cart']) && $_COOKIE['cart'] != 'a:0:{}'  && $_COOKIE['cart'] != '' && $_COOKIE['cart'] != 'N;'){
                foreach(unserialize($_COOKIE['cart']) as $link => $quantity){
                    $sql = "SELECT * FROM product WHERE link = '$link'";
                    $result = mysqli_query($connect, $sql);
                    foreach($result as $product){
                        ?>
                        <tr align="center">
                            <td>
                                <input type="checkbox" value="<?php echo $product['link']; ?>" id="" name="product[]" checked>
                            </td>
                            <td><?php echo $product['name']; ?></td>
                            <td>
                                <img src="./admin/san-pham/photos/<?php echo $product['image']; ?>" alt="" height="100">
                            </td>
                            <td><?php echo number_format($product['price'],0,",",","); ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo number_format($product['price'] * $quantity,0,",",","); ?></td>
                            <td><a href="delete_cart.php?link=<?php echo $link ?>">Xóa</a></td>
                        </tr>
                        <?php
                    }
                }
            }
            else {
                echo "Chưa có sản phẩm trong giỏ hàng";
            }
            ?>
            <tr>
                <td colspan=" 7" align="center">
                    <a href="delete_cart.php?delete_all">Xóa hết
                        <?php
                        if(!isset($_COOKIE['cart']) || $_COOKIE['cart'] == 'a:0:{}'  || $_COOKIE['cart'] == '' || $_COOKIE['cart'] == 'N;'){
                            echo 0;
                        }
                        else{
                            $_SESSION['quantity'] = 0;
                            foreach(unserialize($_COOKIE['cart']) as $link => $quantity){
                                $_SESSION['quantity'] += $quantity;
                            }
                            echo $_SESSION['quantity'];
                        }
                        ?>
                        sản phẩm trong giỏ hàng</a>
                </td>
            </tr>
        </table>
        <div class="check-out">
            <button type="submit" class="btn search submit" name="order">Mua hàng</button>
        </div>
    </form>
</div>

<?
require_once "includes/footer.php";
?>
</body>

</html>