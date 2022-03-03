<?php
session_start();
if(isset($_GET['link'])){
    $link = $_GET['link'];
    if(!isset($_COOKIE['cart']) || ($_COOKIE['cart']) == 'a:0:{}'){
        $_SESSION['cart'][$link] = 1 ;
        $_SESSION['quantity'] = 1;
        setcookie('cart',serialize($_SESSION['cart']),time() + 60*60*24*365);
    }
    else{
        $_SESSION['cart'] = unserialize($_COOKIE['cart']);
        if(isset($_SESSION['cart'][$link])){
            $_SESSION['cart'][$link]++;
        }else{
            $_SESSION['cart'][$link] = 1 ;
        }
        setcookie('cart',serialize($_SESSION['cart']),time() + 60*60*24*365);
        $_SESSION['quantity'] = 1;
        foreach(unserialize($_COOKIE['cart']) as $link => $quantity){
            $_SESSION['quantity'] += $quantity;
        }
        echo $_SESSION['quantity'];
        echo "<br>";
        print_r(unserialize($_COOKIE['cart']));
    }
    header( "Location: cart_view.php");
}