<?php
include "include/session.php";
unset($_SESSION['user']);
header('Location: index.php');
?>

