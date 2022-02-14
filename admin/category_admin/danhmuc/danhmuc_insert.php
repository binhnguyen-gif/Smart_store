<?php
if (isset($_POST['themmoi'])){
    $tendanhmuc = $_POST['tendanhmuc'];
    $link = $_POST['link'];
    $level = $_POST['level'];

    $sql_danhmuc = "INSERT INTO danhmuc(tendanhmuc, link, level) VALUES ('".$tendanhmuc."','".$link."','".$level."')";
    $query_danhmuc = mysqli_query($connect, $sql_danhmuc);
    if ($query_danhmuc){
        echo '<script>alert("Thêm danh mục thành công");</script>';
    }
    else {
        echo '<script>alert("Thêm danh mục thất bại");</script>';
    }
}
?>
