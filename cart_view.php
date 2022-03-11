<?php
require_once "includes/header.php";
require_once "db.php";
require_once "includes/session.php";
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
                                <img src="./images/products/<?php echo $product['image']; ?>" alt="" height="100">
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
        <?php if (isset($_SESSION['user'])){
            echo '<div class="check-out">
            <button type="submit" class="btn search submit" name="order">Mua hàng</button>
        </div>';
        }

        ?>
<!--        <div class="check-out">-->
<!--            <button type="submit" class="btn search submit" name="order">Mua hàng</button>-->
<!--        </div>-->
    </form>
</div>
<form action="order_view.php" method="post">
    <div class="container">
        <div class="information_user" style="margin-top: 45px;">
            <div class="information_user-title" style="background: #0f9ed8">
                <h3 style="padding: 12px; text-align: center">Thông tin người mua</h3>
            </div>
            <div class="form_dk">
                <label>Tên của bạn</label>
                <input type="text" name="name" id="">
                <br>
                <label for="">Số điện thoại của bạn</label>
                <input type="text" name="sdt" value="">
                <br>
                <label for="">Email của bạn</label>
                <input type="email" name="email" id="">
                <br>
                <label for="">Địa chỉ</label>
                <textarea name="address" id="" cols="30" rows="10"></textarea>
                <br>
                <?php if (!isset($_SESSION['user'])){
            echo '<input type="submit" class="btn search submit" name="muahang" value="Mua hàng">';
        }?>

            </div>
        </div>

    </div>

</form>

<?php
require_once "includes/footer.php";
?>
</body>

</html>