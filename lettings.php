<?php
    include 'includes/header.php';
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $Property=new Property();
    $properties=$Property->listProperties();
?>
<section class="properties-section bg-img">
        <h2>Properties to let</h2>
        <div class="fp-container">

        <?php
            foreach($properties as $property){
                if($property['transaction_type'] == 'rent'){
        ?>
            <div class="featured-property">
                <p>Property id: <?=$property['identifier']?></p>
                <h4><?=$property['address']?></h4>
                <div class="img-container">
                <img src="images/house-to-let/<?=$property['image']?>" alt="house">
                </div>
                <span class="price">$<?=$property['price']?></span>
                <span>House to Let</span>
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