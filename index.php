<?php 
//    require_once "includes/header.php";
    require_once "db.php";
?>

<body>
    <?php 
//    require_once "includes/menu.php";
    if (isset($_GET['category'])) {
        $temp = $_GET['category'];
    }
    else {
        $temp = '';
    }
    if ($temp == 'laptops'){
        include_once '';
    }
    else {
        include_once 'dashboard.php';
    }
//    require_once "includes/footer.php";
    ?>
</body>

</html>
</html>