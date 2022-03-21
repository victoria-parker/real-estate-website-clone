<?php
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $Property=new Property();
    $Property->seePropertyById();
?>

<div class="details-property">
        <p id="popUp-prop-identifier">Property number: <?=$Property->getIdentifier();?></p>
    <div class="detailsDiv1">
        <p><?=$Property->getAddress();?></p>
        <img src="images/<?=$Property->getImage();?>" alt="house">
        <div class="price-container"><span>Price: </span><span class="price">$<?=$Property->getPrice();?></span></div>
    </div>
    <div class="detailsDiv2">
        <h4>Description</h4>
        <p><?= nl2br($Property->getDescription()) ?></p>
        <a href="contact.php" class="sm-call-to-action">Contact our agents</a>
    </div>
</div>
