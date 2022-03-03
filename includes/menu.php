<?php include "includes/session.php"; ?>
<div class="navbar">
    <div class="container">
        <ul class="nav-list">
            <li class="nav-item">
                <a class="nav-link" href="">Hỗ trợ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Tra cứu đơn hàng</a>
            </li>
            <?php
            if (isset($_SESSION['user'])) {
                echo '<li class="nav-item">
                <a class="nav-link" href="logout.php">Đăng xuất</a>
            </li> <li class="nav-item">
                <a class="nav-link" href="">' . $row['name'] . '</a>
            </li>';
            } else {
                echo '<li class="nav-item">
                <a class="nav-link" href="login.php">Đăng nhập</a>
            </li> <li class="nav-item">
                <a class="nav-link" href="signup.php">Đăng ký</a>
            </li>';
            }


            ?>
        </ul>
    </div>
</div>

<!--<a class="nav-link" href="signup.php">'.$_SESSION['user']['name'].'</a>-->

<div class="search">
    <div class="container">
        <div class="row align-items-center justify-content-around">
            <div class="col-3">
                <a href="index.php"><img src="./images/smart-mobi2.png" alt="logo" width="100%"></a>
            </div>
            <div class="col-6">
                <div class="contact-row">
                    <div class="contact-row__us">
                        <div class="contact-phone">
                            <span><i class="color-icon fas fa-phone-square-alt"></i></span>
                            <span>0363631790</span>
                        </div>
                        <div class="contact-email">
                            <span><i class="color-icon fas fa-envelope-square"></i></span>
                            <span class="contact-email__address">binhnguyen@gmail.com</span>
                        </div>
                    </div>
                    <form class="contact-row__search">
                        <input type="text" name="search_contact" id="contact_input-search"
                               placeholder="Nhập từ khóa cần tìm kiếm...">
                        <a href="" class="btn search"><i class="color-icon__search fas fa-search"></i></a>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div class="contact-row__us contact-tg">
                    <a class="cart" href="cart_view.php">
                        <span class="cart_icon"><i
                                    class="color-icon account-icon fas fa-shopping-cart"></i>
                        <p>
                                <?php
                                if (!isset($_COOKIE['cart']) || $_COOKIE['cart'] == 'a:0:{}' || $_COOKIE['cart'] == '' || $_COOKIE['cart'] == 'N;') {
                                    echo 0;
                                } else {
                                    $_SESSION['quantity'] = 0;
                                    foreach (unserialize($_COOKIE['cart']) as $link => $quantity) {
                                        $_SESSION['quantity'] += $quantity;
                                    }
                                    echo $_SESSION['quantity'];
                                }
                                ?>
                            </p>
                        </span>
                        <span>Giỏ hàng</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="menu">
    <div class="container">
        <ul class="menu-list">
            <li class="menu-item"><a href="index.php?process=trangchu" class="menu-link">Trang chủ</a></li>
            <li class="menu-item category-list">Danh mục
                <i class="fa-solid fa-caret-down"></i>
                <div class="category-item">
                    <?php
                    $query_category = mysqli_query($connect, "select * from category");
                    while ($row_category = mysqli_fetch_array($query_category)) {
                        ?>
                        <a href="category.php?category=<?php echo $row_category['id']; ?>"
                           class="category-link"><?php echo $row_category['name']; ?></a>
                        <?php
                    }
                    ?>
                </div>
            </li>
            <li class="menu-item"><a href="" class="menu-link">Tin tức</a></li>
            <li class="menu-item"><a href="" class="menu-link">Giới thiệu</a></li>
            <li class="menu-item"><a href="" class="menu-link">Liên hệ</a></li>
        </ul>

    </div>
</div>