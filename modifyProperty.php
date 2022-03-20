<?php
      include 'includes/header.php';
      require 'config/config.php';
      $User=new User;
      $User->authenticate();
      $Property=new Property();
      $check=$Property->modifyProperty();
      $css='danger';
      $message='Sorry, the property hasn\'t been modified, please try again later';

      if($check){
        $css='success';
      $message='The property has been modify correcty';
    
      }
?>
<main class="main_admin bg-img center">
    <h1>Modify a Property Section</h1>
    <div class="check-message check-<?=$css?>">
            <?=$message?>
            <br>
            <a href="admin.php" class="go-back-btn check-btn">Go back to admin</a>
        </div>
</main>
<?php
    include 'includes/footer.php';
?>
