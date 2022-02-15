<?php
$sql_slider = "SELECT * FROM slider ORDER BY id DESC";
$query_slider = mysqli_query($connect, $sql_slider);


?>

<div class="container">
    <div class="fade">
        <?php
        while ($row = mysqli_fetch_array($query_slider)) { ?>
            <div style="height: 320px;">
                <img src="./images/<?php echo $row['image']; ?>" alt="Slider" width="100%" height="100%" style="border: none">
            </div>
        <?php } ?>
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
        <div class="col-3">
            <div class="product-hu">
                <a href="#">
                    <img src="./images/products/e7de832e8da20d696a99e562a2d77921.jpg" class="product-hu__image" alt=""
                         width="100%">
                    <div class="product-detail">
                        <p class="product-text">Samsung Galaxy S10 White</p>
                        <div class="price-product">
                            <span class="price-normal">15,400,000 <sup>đ</sup></span>
                            <span class="price-promotion">20,400,000 <sup>đ</sup></span>
                        </div>
                        <div class="product-hut">
                            <div class="product-hut__link">Chi tiết</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
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
                    speed: 500,
                    fade: false,
                    cssEase: 'linear'
                }
            );
        }
    )

</script>