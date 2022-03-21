<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="./style/sweetalert2.css">
    <link rel="stylesheet" href="./style/style.css">
    <script src="js/sweetalert2.js"></script>

    <title>Real Estate Website Clone</title>
</head>
<body>
    <header>
        <div class="social-media">
            <span>01 123 4567</span>
            <ul>
                <li><a href="https://www.facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://www.twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div id="navigation-bar">
            <nav>
            <div id="logo"><img src="images/logo.png" alt="logo" width="100px"></div>
            <button class="btn"><i class="fas fa-bars"></i></button>
            <ul id="menu">
                <?php
                    if(isset($_SESSION['login'])){
                    ?>
                        <li><a href="admin.php">ADMIN</a></li>
                        <li><a href="propertiesAdmin.php">ADMIN PROPERTIES</a></li>
                        <?php
                            if($_SESSION['adminPermits'] == true) {
                        ?>
                        <li><a href="usersAdmin.php">ADMIN USERS</a></li>
                        <?php
                        }
                        ?>
                        <li><a href="logout.php">LOGOUT</a></li>
                    <?php
                        
                    }else{
                    ?>
                        <li><a href="formLogin.php">LOGIN</a></li>
                    <?php
                    }
                    ?>
 
            </ul>
            </nav>
        </div>
    </header>
