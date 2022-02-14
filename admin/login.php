<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="login">
    <div class="login">
        <h1><img src="./images/smart-mobi2.png" alt=""></h1>
        <div class="horizontal"></div>
        <div class="login-input">
            <form action="" name="form_login" method="post">
                <div class="login_username">
                    <span class="icon_login"><i class="fas fa-user"></i></span>
                    <span class="full">
                        <input type="text" name="username_sigin" id="" autocomplete="off" placeholder="Tên đăng nhập">
                    </span>
                </div>
                <div class="login_pw">
                    <span class="icon_login"><i class="fas fa-lock"></i></span>
                    <span class="full">
                        <input type="password" name="pw_sigin" id="" placeholder="Mật khẩu">
                    </span>
                </div>
                <div class="btn_sigin">
                    <input type="submit" value="Đăng nhập">
                </div>
            </form>
        </div>
    </div>
</body>

</html>