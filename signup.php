<?php
include "includes/header.php";
include "includes/session.php";
?>
<div class="login-box">
    <div class="signup">

                <?php
                if (isset($_SESSION['error_signup'])){
                    echo '<div class="information">'.'<p>'. $_SESSION['error_signup'].'</p>'. '</div>';
                    unset($_SESSION['error_signup']);
                }
                ?>

        <h3>Sign up</h3>
        <form action="register.php" method="post" enctype="multipart/form-data">
            <div class="login-email">
                <input type="text" name="username" id="form-signup__username" placeholder="Username">
                <span id="username_error"></span>
            </div> <div class="signup-email">
                <input type="email" name="email" id="form-signup__email" placeholder="Email">
                <span id="email_error"></span>
            </div>
            <div class="signup-password">
                <input type="password" name="password" id="form-signup__password" placeholder="Password">
                <span id="password_error"></span>
            </div> <div class="login-retype__password">
                <input type="password" name="retype__password" id="form-signup__retype-password" placeholder="Retype-Password">
                <span id="repassword_error"></span>
            </div>
            <button type="submit" onclick="return validate();" name="signup" id="signup-submit"><i class="fa-solid fa-right-to-bracket"></i>Sign up</button>
        </form>
        <a href="index.php" class="signup_home"><i class="fa-solid fa-house-chimney"></i>Home</a>
    </div>

</div>
<?php include "script.php";?>

