<?php
session_start();
if(isset($_GET['link'])){
    $link = $_GET['link'];
    $_SESSION['quantity'] -= $_SESSION['cart'][$link];
    unset($_SESSION['cart'][$link]);
    setcookie('cart',serialize($_SESSION['cart']),time() + 60*60*24*365);
    header('Location: cart_view.php');
}
if(isset($_GET['delete_all'])){
    $_SESSION['quantity'] = 0;
    unset($_SESSION['cart']);
    setcookie('cart',serialize($_SESSION['cart']),time() + 60*60*24*365);
    header('Location: cart_view.php');
}