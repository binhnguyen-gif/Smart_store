<?php
//$sql_slider = "SELECT * FROM slider ORDER BY id DESC";
//$query_slider = mysqli_query($connect, $sql_slider);
include 'includes/header.php';
include 'includes/session.php';
include 'includes/menu.php';
$sql_product = "select * from product";
$query_product = mysqli_query($connect, $sql_product);

?>

    <div class="container">
        <div class="fade">
            <div style="height: 320px;">
                <img src="./images/xsmaxbanner.png" alt="Slider" width="100%" height="100%"
                     style="border: none">
            </div>
            <div style="height: 320px;">
                <img src="./images/banner-samsungs10.png" alt="Slider" width="100%" height="100%"
                     style="border: none">
            </div>
            <div style="height: 320px;">
                <img src="./images/Right-banner.png" alt="Slider" width="100%" height="100%"
                     style="border: none">
            </div>
        </div>
    </div>
    <div class="container product">
        <div class="row">
            <div class="col-12">
                <h3 class="product-title">
                    Sản phẩm khuyến mại hot
                </h3>
            </div>
        </div>
        <div class="row">
            <?php while ($row_product = mysqli_fetch_array($query_product)) { ?>
                <div class="col-3">
                    <div class="product-hu">
                        <a href="product.php?product=<?php echo $row_product['id']; ?>">
                            <div class="product-hu__image"
                                 style="background-image: url('./images/products/<?php echo $row_product['image']; ?>');"></div>
                            <div class="product-detail">
                                <p class="product-text"><?php echo $row_product['name']; ?></p>
                                <div class="price-product">
                                    <span class="price-normal">15,400,000 <sup>đ</sup></span>
                                    <span class="price-promotion">20,400,000 <sup>đ</sup></span>
                                </div>
                            </div>
                        </a>
                        <div class="product-hut">
                            <a href="add_to_cart.php?link=<?php echo $row_product['link'] ?>" class="product-hut__link" style="text-align: center"; >Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script>
        // $('.fade').slick({
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     dots: false,
        //     infinite: true,
        //     speed: 500,
        //     fade: false,
        //     cssEase: 'linear'
        // });
        $(document).ready(
            function () {
                $('.fade').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        infinite: true,
                        speed: 800,
                        fade: false,
                        autoplay: true,
                        autoplaySpeed: 4000,
                        cssEase: 'linear',
                        draggable: true
                    }
                );
            }
        )

    </script>
<?php include 'includes/footer.php'; ?>