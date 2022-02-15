<?php
    include 'includes/header.php';
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $Property=new Property();
    $properties=$Property->listProperties();
?>
<section class="properties-section bg-img">
        <h2>Properties for Sale</h2>
        <div class="fp-container">
            <?php
                foreach ($properties as $property){
                    if($property['transaction_type'] == 'sale'){
            ?>
                        <div class="featured-property">
                            <p>Property id: <?=$property['identifier']?></p>
                            <h4><?=$property['address']?></h4>
                            <div class="img-container">
                            <img src="images/house-for-sale/<?=$property['image']?>" alt="house">
                            </div>
                            <span class="price">€<?=$property['price']?></span>
                            <span>House for sale</span>
                        </div>
            <?php
                    }
                }
            ?>
        </div>
    </section>

<?php
    include 'includes/footer.php';
?>