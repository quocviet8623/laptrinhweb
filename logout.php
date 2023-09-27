<?php
session_start();
//ob_start();
//echo $_SESSION['tendangnhap'];
unset($_SESSION['tendangnhap']);

header('location: index.php');
?>