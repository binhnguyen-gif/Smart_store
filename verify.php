<?php
include "db.php";
include 'include/session.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    try{

        $sql_login = "SELECT *, COUNT(*) AS numrows FROM account WHERE email = '$email'";
        $query_login = mysqli_query($connect, $sql_login);
        $row = mysqli_fetch_array($query_login);
        if($row['numrows'] > 0){
                if($password == $row['password']){
                    if($row['premission'] == 1){
                        $_SESSION['admin'] = $row['id'];
                    }
                    else{
                        $_SESSION['user'] = $row['id'];
                    }
                }
                else{
                    $_SESSION['error'] = 'Incorrect Password';
                }
        }
        else{
            $_SESSION['error'] = 'Email not found';
        }
    }
    catch(Exception $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }

}
else{
    $_SESSION['error'] = 'Input login credentails first';
}

header('location: login.php');
//header('location: cart_view.php');

?>