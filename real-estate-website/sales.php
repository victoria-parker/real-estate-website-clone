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
                            <img src="images/<?=$property['image']?>" alt="house">
                            </div>
                            <span class="price">€<?=$property['price']?></span>
                            <button class="sm-call-to-action seeDetails" data-id="<?=$property['identifier']?>">See details</button>
                        </div>
            <?php
                    }
                }
            ?>
        </div>

    <!-- Ajax pop Up details -->
    <script type='text/javascript'>
        $(document).ready(function(){
            $('.seeDetails').click(function(){
                var id = $(this).data('id');
                $.ajax({
                    url: 'ajaxfile.php',
                    type: 'get',
                    data: {id: id},
                    success: function(response){ 
                        $('.popUp-body').html(response); 
                        $('#popUp-property').css("display", "flex"); 
                    }
                });
            });
        });
    </script>
    
    <!-- Popup div -->
    <div id="popUp-property">
        <div class="popUp-details-container">
            <button id="close-btn">X</button>	
            <div class="popUp-body">
            </div>
        </div>
    </div>
 
    </section>

<?php
    include 'includes/footer.php';
?>