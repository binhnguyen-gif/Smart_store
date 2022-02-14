<?php
include "./config/db.php";
include "include/session.php";
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
//  echo $username;
//  echo $email;
//  echo $password;
    $querry = mysqli_query($connect, "select * from account where email = '$email'");
    $row = mysqli_fetch_array($querry);
     if (mysqli_num_rows($querry) > 0){
         $_SESSION['error_signup'] = 'Địa chỉ email này đã được đăng ký';
         header('location: signup.php');
     }
     else {
         $sql_insert_data = "insert into account(name, email, password) values('" . $username . "', '" . $email . "', '" . $password . "')";
         $query = mysqli_query($connect, $sql_insert_data);
         header('location: login.php');

     }
}
//echo $_SESSION['error_sinup'];

?>
