<?php
    require 'config/config.php';
    include 'includes/header.php';
      $User=new User;
      $User->authenticate();
      $User->authenticateAdmin();
      $check=$User->modifyUser();
      $css='danger';
      $message='Sorry, the user hasn\'t been modified, please try again later';

      if($check){
        $css='success';
      $message='The user has been modified correcty';
    
      }
?>
<main class="main_admin bg-img center">
    <h1>Modify a User Section</h1>
    <div class="check-message check-<?=$css?>">
            <?=$message?>
            <br>
            <a href="usersAdmin.php" class="go-back-btn check-btn">Go back to admin</a>
        </div>
</main>
<?php
    include 'includes/footer.php';
?>
