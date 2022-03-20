<?php
    include 'includes/header.php';
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $Property=new Property();
?>
    <main class="main_admin bg-img center">
        <h1>Add a property</h1>

        <form class="admin-form" method="POST" action="addProperty.php" enctype="multipart/form-data">
            <div>
            <label for="transaction_type">Transaction type</label>
            <select name="transaction_type" id="transaction_type">
                <option value="rent">rent</option>
                <option value="sale">sale</option>
            </select>
            </div>

            <div>
            <label for="property_type">Property type</label>
            <input type="text" name="property_type" id="property_type" required>
            </select>
            </div>

            <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>
            </div>

            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" min=0 step="0.01" required>
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" style="resize: none;" required></textarea>
            </div>

            <div>
                <p>Main Featured<p>
                <div class="radio-div">
                    <label for="mainFeaturedYes">Yes</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedYes" value="true">
                </div>

                <div class="radio-div">
                    <label for="mainFeaturedNo">No</label>
                    <input type="radio" name="mainFeatured" id="mainFeaturedNo" value="false">
                </div>

            </div>
            <button class="sm-call-to-action">Submit</button>
        </form>
        <a href="propertiesAdmin.php" class="go-back-btn">Go back to admin</a>
    </main>
<?php
    include 'includes/footer.php';
?>