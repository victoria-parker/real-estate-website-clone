<?php
      include 'includes/header.php';
      require 'config/config.php';
      $User=new User;
      $User->authenticate();
      $User->authenticateAdmin();
      $check=$User->deleteUser();
      $css='danger';
      $message='Sorry, the user hasn\'t been deleted, please try again later';

      if($check){
        $css='success';
      $message='The User with the email '.$check->getUserEmail().' and with the id '.$check->getUserId().' has been deleted from our system correcty.';
    
      }
?>
<main class="main_admin bg-img center">
    <h1>Delete a User Section</h1>
    <div class="check-message check-<?=$css?>">
            <?=$message?>
            <br>
            <a href="usersAdmin.php" class="go-back-btn check-btn">Go back to admin</a>
        </div>
</main>
<?php
    include 'includes/footer.php';
?>
