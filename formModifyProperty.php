<?php

    require 'config/config.php';
    $User=new User;
    $User->authenticate();
    $Property=new Property();
    $Property->seePropertyById();
    include 'includes/headerAdmin.php';
?>
    <main class="main_admin bg-img center">
        <h1>Modify Property</h1>
        

        <form class="admin-form" method="POST" action="modifyProperty.php" enctype="multipart/form-data">

            <div>
            <label for="transaction_type">Transaction type</label>
            <select name="transaction_type" id="transaction_type" required>

            <?php
                if($Property->getTransactionType() == "sale"){
            ?>

                <option value="<?=$Property->getTransactionType()?>"><?=$Property->getTransactionType()?></option>
                <option value="rent">rent</option>

            <?php
            }else{
            ?>
                <option value="rent">rent</option>
                    <option value="sale">sale</option>
            <?php
            }
            ?>
            </select>
            </div>

            <div>
                <label for="property_type">Property type</label>
                <input type="text" name="property_type" id="property_type" value="<?=$Property->getPropertyType()?>" required>
            </div>

            <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?=$Property->getAddress()?>" required>
            </div>

            <div class="image-form-container">
                <img src="./images/<?=$Property->getImage()?>">
                <label for="image">Change image</label>
                <input type="file" name="image" id="image">

            </div>

            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" min=0  step="0.01" value="<?=$Property->getPrice()?>" required>
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" style="resize: none;" required><?=$Property->getDescription()?></textarea>
            </div>

            <div>
                <p>Main Featured<p>
                <?php
                if($Property->getMainFeatured() == true){
                ?>

                <div class="radio-div">
                    <label for="mainFeaturedYes">Yes</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedYes" value="true" checked>
                </div>

                <div class="radio-div">
                    <label for="mainFeaturedNo">No</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedNo" value="false">
                </div>

                <?php
                }else{
                ?>
                <div class="radio-div">
                    <label for="mainFeaturedYes">Yes</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedYes" value="true">
                </div>

                <div class="radio-div">
                    <label for="mainFeaturedNo">No</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedNo" value="false" checked>
                </div>

                <?php
                }
                ?>
            </div>

            
            <input type="hidden" name="identifier" value="<?=$Property->getIdentifier()?>">
            <input type="hidden" value="<?=$Property->getImage()?>" name="currentImage">

            <button class="sm-call-to-action">Submit</button>
        </form>

        <a href="propertiesAdmin.php" class="go-back-btn">Go back to admin</a>
    </main>
<?php
    include 'includes/footer.php';
?>