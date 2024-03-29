<?php
    include 'includes/header.php';
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $Property=new Property();
    $properties=$Property->listProperties();
?>
<main>
    <div class="hero-index bg-img">
        <div>
            <div>
                <h1>You thought about Selling and Buying,
                <br>    
                <strong>you thought of us</strong></h1>
                <h2>Parker Real Estate Agents Drogheda</h2>
            </div>
            <a href="#featured-properties" class="call-to-action">Explore our properties</a>  
        </div>

    </div>



    <section id="our-services">
        <div><i class="fal fa-home our-sv-img"></i><h2>Let Properties</h2><h3>No let, No fee!</h3><a href="contact.php" class="sm-call-to-action">Contact our agents</a></div>
        <div><i class="fal fa-key-skeleton our-sv-img"></i><h2>Sell Properties</h2><h3>No sell, No fee!</h3><a href="contact.php" class="sm-call-to-action">Contact our agents</a></div>
        <div><i class="fal fa-tasks our-sv-img"></i><h2>Property Management</h2><h3>Because we care</h3><a href="contact.php" class="sm-call-to-action">Contact our agents</a></div>
        <div><i class="fal fa-comment-alt-dollar our-sv-img"></i><h2>Property Valuation</h2><h3>The value you deserve</h3><a href="contact.php" class="sm-call-to-action">Contact our agents</a></div>
    </section>



    <section class="featured-properties" id="featured-properties">
        <h2>Featured Sale Properties</h2>
        <div class="fp-container">

        <?php

            foreach($properties as $property){
                if($property['transaction_type'] == 'sale'){
                    if($property['mainFeatured']){

        ?>
            <div class="featured-property">
                <p>Property id: <?=$property['identifier']?></p>
                <h4><?=$property['address']?></h4>
                <div class="img-container">
                <img src="images/<?=$property['image']?>" alt="house">
                </div>
                <span class="price">$<?=$property['price']?></span>
                <span>House for sale</span>
                <button class="sm-call-to-action seeDetails" data-id="<?=$property['identifier']?>">See details</button>
            </div>
        <?php
                }
            }
        }
        ?>
        </div>
        <a href="sales.php" class="sm-call-to-action">Explore sales</a>


        <h2>Featured Rent Properties</h2>
        <div class="fp-container">
        <?php
            foreach($properties as $property){    
                if($property['transaction_type'] == 'rent'){
                    if( $property['mainFeatured']){
        ?>
            <div class="featured-property">
                <p>Property id: <?=$property['identifier']?></p>
                <h4><?=$property['address']?></h4>
                <div class="img-container">
                    <img src="images/<?=$property['image']?>" alt="house">
                </div>
                <span class="price">$<?=$property['price']?></span>
                <span>House for rent</span>
                <button class="sm-call-to-action seeDetails" data-id="<?=$property['identifier']?>">See details</button>
            </div>
            <?php
                    }
                }
            }
            ?>
        </div>
        <a href="lettings.php" class="sm-call-to-action">Explore Lettings</a>
    
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



    <section class="articles">
        <div class="articles-text">
            <span>THINKING TO SELL?</span>
            <h2>Selling your Property?</h2>
            <p>We believe that the real estate world should be very simple. Thanks to our technology and our team, we are able to buy homes in just 7 days, renovate them and put them up for sale again. A completely new experience whether you buy or sell.</p>
            <a href="contact.php" class="sm-call-to-action">contact our agents</a>
        </div>
        <div class="articles-img">
            <img src="images/moving-house.jpg" alt="family moving">
        </div>
    </section>


    <section class="articles">
        <div class="articles-img">
            <img src="images/rent-keys.jpg" alt="family moving">
        </div>
        <div class="articles-text">
            <span>THINKING TO LET?</span>
            <h2>Letting Your Property?</h2>
            <p>Don't worry about collecting the rent for your home. Minimize the risks when renting. We make a careful selection of the tenant, and we study their solvency, employment contract, payroll, and delinquency. We do a commercial management of your home, providing truthful and objective information, being very efficient and demanding with our results.</p>
            <a href="contact.php" class="sm-call-to-action">contact our agents</a>
        </div>
    </section>


    <section class="contact-section bg-img">
        <div class="articles-text" style="background-color: transparent;">
            <span>Need consultation?</span>
            <h2>Send Us a Message</h2>
            <p>Please feel free to drop us a line if you have any question.We'll get back to you as soon as possible!</p>
        </div>
        <form action="sendMessage.php" method="POST">

            <div class="form-el">
                <label for="fullName">Full Name</label>
                <input type="text" name="fullName" id="fullName" required>
            </div>
            <div class="form-el">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-el">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" required>
            </div>
            <div class="form-el">
                <label for="phone">Phone number</label>
                <input type="tel" name="phone" id="phone" required>
            </div>
            <div class="form-el">
                <label for="message">You Message</label>
                <textarea name="message" id="message" cols="30" rows="10" style="resize: none;"></textarea>
            </div>
            <button class="sm-call-to-action">Submit</button>    
        </form>
    </section>
</main>

<?php
    include 'includes/footer.php';
?>