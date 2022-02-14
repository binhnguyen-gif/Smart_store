<script>
    // Lấy giá trị của một input
    function getValue(id){
        return document.getElementById(id).value.trim();
    }

    // Hiển thị lỗi
    function showError(key, mess){
        document.getElementById(key + '_error').innerHTML = mess;
    }

    function validate()
    {
        var flag = true;

        // 1 username
        var username = getValue('form-signup__username');
        if (username == '' || username.length < 5 || !/^[a-zA-Z0-9]+$/.test(username)){
            flag = false;
            showError('username', 'Vui lòng kiểm tra lại Username');
        }

        // 2. password
        var password = getValue('form-signup__password');
        var repassword = getValue('form-signup__retype-password');
        if (password == '' || password.length < 8 || password != repassword){
            flag = false;
            showError('password', 'Vui lòng kiểm tra lại Password');
        }
        // 4. Email
        var email = getValue('form-signup__email');
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (!mailformat.test(email)){
            flag = false;

            showError('email', 'Vui lòng kiểm tra lại Email');
        }

        return flag;
    }
</script>