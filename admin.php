<?php
    require 'config/config.php';
    $User=new User;
    $User->authenticate();
    include 'includes/header.php';


?>
<main class="main_admin bg-img">
    <h1> Admin Panel</h1>
    <div class="admin-panel">
    <a href="propertiesAdmin.php" class="login-btn">Properties Admin</a>
    <a href="usersAdmin.php" class="login-btn">Users Admin</a>
    </div>
</main>
<?php
    include 'includes/footer.php';
?>