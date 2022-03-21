<?php
    require 'config/config.php';
    If(isset($_SESSION['login'])){
        header('location: admin.php');
    }else{
        header('location: formLogin.php');
    }

?>