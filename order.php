<?php
if(isset($_POST['order'])){
    $_SESSION['order'] = [];
    $list_product = $_POST['product'];
    if(isset($_COOKIE['cart']) && $_COOKIE['cart'] != 'a:0:{}'  && $_COOKIE['cart'] != '' && $_COOKIE['cart'] != 'N;'){
        foreach($list_product as $product ){
            $_SESSION['order'][$product] = unserialize($_COOKIE['cart'])[$product];
        }
        setcookie('order',serialize($_SESSION['order']),time() + 60*60*24*265);
        header('Location: order_view.php');
    }
}
?>