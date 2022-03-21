<?php
    require 'config/config.php';
    $User=new User;
    $User->authenticate();
    $User->authenticateAdmin();
    include 'includes/headerAdmin.php';
    $check=$User->addUser();
      $css='danger';
      $message='Sorry, the user hasn\'t been added, please try again later';

      if($check){
        $css='success';
      $message='The user has been added correcty';
    
      }
?>
<main class="main_admin bg-img center">
    <h1>Add a User Section</h1>
    <div class="check-message check-<?=$css?>">
            <?=$message?>
            <br>
            <a href="usersAdmin.php" class="go-back-btn check-btn">Go back to admin</a>
        </div>
</main>
<?php
    include 'includes/footer.php';
?>
