<?php
    include 'includes/header.php';
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $Property=new Property();
    $identifier=$_GET['identifier'];
    $Property->seePropertyById($identifier);
?>
    <main class="main_admin bg-img center">
        <h1>Modify Property</h1>
        <form class="admin-form">

            <input type="hidden" name="identifier" value="<?=$identifier?>">

            <div>
            <label>Transaction type</label>
            <select name="" id="">
                <option value=""></option>
                <option value=""></option>
            </select>
            </div>

            <div>
            <label>Property type</label>
            <select name="" id="">
                <option value=""></option>
                <option value=""></option>
            </select>
            </div>

            <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
            </div>

            <div class="image-form-container">
                <img src="./images/<?=$Property->getTransactionType()?>/<?=$Property->getImage()?>">
                <label for="image">Change image</label>
                <input type="file" name="image" id="image">
                <input type="hidden" value="<?=$Property->getImage()?>" name="oldImagen">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" min=0  step="0.01">
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" style="resize: none;"></textarea>
            </div>

            <div>
                <p>Main Featured<p>
                <?php
                if($Property->getMainFeatured() == true){
                ?>
                <label for="mainFeaturedYes">
                    Yes
                    <input type="radio" name="mainFeatured" id="mainFeatured" checked>
                </label>
                <label for="mainFeaturedNo">
                    No
                    <input type="radio" name="mainFeatured" id="mainFeatured">
                </label>
                <?php
                }else{
                ?>
                <label for="mainFeaturedYes">
                    Yes
                    <input type="radio" name="mainFeatured" id="mainFeatured">
                </label>
                <label for="mainFeaturedNo">
                    No
                    <input type="radio" name="mainFeatured" id="mainFeatured" checked>
                </label>
                <?php
                }
                ?>
            </div>
            <button class="sm-call-to-action">Submit</button>

        </form>
    </main>
<?php
    include 'includes/footer.php';
?>