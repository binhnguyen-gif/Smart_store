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
        <?php
        if (isset($_SESSION['user'])){
            $name_customer = $row['name'];
            $sdt_customer = '0363631790';
            $email_customer = 'binhnguyen@gmail.com';
            $address_customer = '72 Trần Đại Nghĩa , Đồng Tâm, Hai Bà Trưng , Hà Nội';
        }
        elseif (isset($_POST['muahang'])){
            $name_customer = $_POST['name'];
            $sdt_customer = $_POST['sdt'];
            $email_customer = $_POST['email'];
            $address_customer = $_POST['address'];
        }


        ?>
        <div class="information_customer">
            <h3>Thông tin người mua</h3>
            <p>Họ tên: <?php echo $name_customer; ?></p>
            <p>Số điện thoại : <?php echo $sdt_customer; ?></p>
            <p>Địa chỉ : <?php echo $address_customer; ?></p>
            <label for="">Hình thức thanh toán :</label>
            <select name="hinhthuc" id="hinhthuc">
                <option value="0">Thẻ ngân hàng</option>
                <option value="1" selected>Tiền mặt</option>
            </select>
        </div>
        <div class="check-out" style="margin-top: 45px;">
            <button type="submit" class="btn search submit" name="order">Đặt hàng</button>
        </div>
    </form>
</div>
<?php
require_once "includes/footer.php";
?>
</body>

</html>