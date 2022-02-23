<?php
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $identifier = $_POST['id'];
    $Property=new Property();
    $Property->seePropertyById($identifier);
?>

<div class="details-property">

    <div>
        <p>Property id: <?=$Property->getIdentifier();?></p>
            <h4><?=$Property->getAddress();?></h4>
            <div class="img-container">
                <img src="images/<?=$Property->getTransactionType();?>/<?=$Property->getImage();?>" alt="house">
            </div>
            <span class="price">$$<?=$Property->getPrice();?></span>
                </div>
                <div>
                    <h4>Description</h4>
                    <p><?=$Property->getDescription();?></p>
                    <a href="contact.php" class="sm-call-to-action">Contact our agents</a>
    </div>
</div>
