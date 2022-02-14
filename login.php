<?php
include "include/header.php";
include 'include/session.php';
if(isset($_SESSION['user'])){
    header('Location: index.php');
}
?>
<div class="login-box">
    <div class="login">
        <?php
        if (isset($_SESSION['error'])){
            echo '<div class="information">'.'<p>'. $_SESSION['error'].'</p>'. '</div>';
            unset($_SESSION['error']);
        }
        ?>
        <h3>Sign in</h3>
        <form action="verify.php" method="post" enctype="multipart/form-data">
            <div class="login-email">
                <input type="email" name="email" id="form-login__email" placeholder="Email">
            </div>
            <div class="login-password">
                <input type="password" name="password" id="form-login__password" placeholder="Password">
            </div>
            <button type="submit"  name="login" id="login-submit"><i class="fa-solid fa-right-to-bracket"></i>Sign in</button>
        </form>
        <a href="">I forgot my password</a>
        <a href="signup.php">Register a new membership</a>
        <a href="index.php"><i class="fa-solid fa-house-chimney"></i>Home</a>
    </div>

</div>

<?php include "script.php";?>

