<?php
      include 'includes/header.php';
      require 'classes/Connexion.php';
      require 'classes/Property.php';
      $Property=new Property();
      $check=$Property->addProperty();
      $css='danger';
      $message='Sorry, the property hasn\'t been added, please try again later';

      if($check){
        $css='success';
      $message='The property has been added correcty';
    
      }
?>
<main class="main_admin bg-img center">
    <h1>Add a Property Section</h1>
    <div class="check-message check-<?=$css?>">
            <?=$message?>
            <br>
            <a href="admin.php" class="go-back-btn check-btn">Go back to admin</a>
        </div>
</main>
<?php
    include 'includes/footer.php';
?>
