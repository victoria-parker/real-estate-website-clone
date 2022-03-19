<?php
    include 'includes/header.php';
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $Property=new Property();
    $Property->seePropertyById();
?>
    <main class="main_admin bg-img center">
        <h1>Modify Property</h1>
        

        <form class="admin-form">

            <input type="hidden" name="identifier" value="<?=$Property->getIdentifier()?>">

            <div>
            <label>Transaction type</label>
            <select name="transaction_type" id="transaction_type">

            <?php
                if($Property->getTransactionType() == "sale"){
            ?>

                <option value="<?=$Property->getTransactionType()?>"><?=$Property->getTransactionType()?></option>
                <option value="rent">rent</option>

            <?php
            }else{
            ?>
                <option value="<?=$Property->getTransactionType()?>"><?=$Property->getTransactionType()?></option>
                    <option value="sale">sale</option>
            <?php
            }
            ?>
            </select>
            </div>

            <div>
                <label for="property_type">Property type</label>
                <input type="text" name="property_type" id="property_type" value="<?=$Property->getPropertyType()?>">
            </div>

            <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?=$Property->getAddress()?>">
            </div>

            <div class="image-form-container">
                <img src="./images/<?=$Property->getTransactionType()?>/<?=$Property->getImage()?>">
                <label for="image">Change image</label>
                <input type="file" name="image" id="image">
                <input type="hidden" value="<?=$Property->getImage()?>" name="currentImage">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" min=0  step="0.01" value="<?=$Property->getPrice()?>">
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" style="resize: none;"><?=$Property->getDescription()?></textarea>
            </div>

            <div>
                <p>Main Featured<p>
                <?php
                if($Property->getMainFeatured() == true){
                ?>

                <div class="radio-div">
                    <label for="mainFeaturedYes">Yes</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedYes" checked>
                </div>

                <div class="radio-div">
                    <label for="mainFeaturedNo">No</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedNo">
                </div>

                <?php
                }else{
                ?>
                <div class="radio-div">
                    <label for="mainFeaturedYes">Yes</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedYes">
                </div>

                <div class="radio-div">
                    <label for="mainFeaturedNo">No</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedNo" checked>
                </div>

                <?php
                }
                ?>
            </div>
            <button class="sm-call-to-action">Submit</button>
        </form>

        <a href="admin.php" class="go-back-btn">Go back to admin</a>
    </main>
<?php
    include 'includes/footer.php';
?>