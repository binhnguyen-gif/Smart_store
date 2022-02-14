<?php
$hostname = 'localhost';
$user = 'root';
$password = '';
$database = '49';
$connect = mysqli_connect($hostname,$user,$password,$database);

if ($connect->connect_errno){
    echo "Lỗi kết nối mysqli " . $connect->connect_error;
    die();
}
?>