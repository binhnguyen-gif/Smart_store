<?php include "include/session.php"; ?>
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
            echo '<li class="nav-item">
                <a class="nav-link" href="login.php">Đăng xuất</a>
            </li> <li class="nav-item">
                <a class="nav-link" href="signup.php">
                <img src="" alt="">
</a>
            </li>';

            ?>
        </ul>
    </div>
</div>


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
                    <a class="cart" href="#">
                        <span class="cart_icon"><i class="color-icon account-icon fas fa-shopping-cart"></i><p>0</p></span>
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
            <li class="menu-item"><a href="" class="menu-link">Sản phẩm </a></li>
            <li class="menu-item"><a href="" class="menu-link">Tin tức</a></li>
            <li class="menu-item"><a href="" class="menu-link">Giới thiệu</a></li>
            <li class="menu-item"><a href="" class="menu-link">Liên hệ</a></li>
        </ul>

    </div>
</div>
