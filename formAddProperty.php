<?php
    include 'includes/header.php';
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $Property=new Property();
?>
    <main class="main_admin bg-img center">
        <h1>Add a property</h1>
        <form class="admin-form">
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

            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
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

                <label for="mainFeaturedYes">
                    Yes
                    <input type="radio" name="mainFeatured" id="mainFeatured">
                </label>
                <label for="mainFeaturedNo">
                    No
                    <input type="radio" name="mainFeatured" id="mainFeatured">
                </label>
            </div>
            <button class="sm-call-to-action">Submit</button>
        </form>
    </main>
<?php
    include 'includes/footer.php';
?>