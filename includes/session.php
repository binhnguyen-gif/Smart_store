<?php
include 'db.php';
if(!isset($_SESSION))
{
    session_start();
}
//session_destroy();
if(isset($_SESSION['admin'])){
    header('Location: interface_admin.php');
}

if(isset($_SESSION['user'])) {

    try {
        $id = $_SESSION['user'];
        $sql_login_ss = "select * from account where id = '$id'";
        $query_login_ss = mysqli_query($connect, $sql_login_ss);
        $row = mysqli_fetch_array($query_login_ss);
//        $_SESSION['user'] = $row;
    } catch (Exception $e) {
        echo "There is some problem in connection: " . $e->getMessage();

    }
}
?>
