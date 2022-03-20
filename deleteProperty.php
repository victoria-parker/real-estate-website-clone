<?php
      include 'includes/header.php';
      require 'config/config.php';
      $User=new User;
      $User->authenticate();
      $Property=new Property();
      $check=$Property->deleteProperty();
      $css='danger';
      $message='Sorry, the property hasn\'t been deleted, please try again later';

      if($check){
        $css='success';
      $message='The property located in '.$check->getAddress().' with the id '.$check->getIdentifier().' has been deleted from our system correcty.';
    
      }
?>
<main class="main_admin bg-img center">
    <h1>Delete a Property Section</h1>
    <div class="check-message check-<?=$css?>">
            <?=$message?>
            <br>
            <a href="propertiesAdmin.php" class="go-back-btn check-btn">Go back to admin</a>
        </div>
</main>
<?php
    include 'includes/footer.php';
?>
