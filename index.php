<?php
    include 'includes/header.php';
?>
<main>
<div class="hero-background hero-index">
    <div>
        <div>
            <h1>We Provide The Key To Successful 
            <br>    
            <strong>Sales, Lettings & Property Management</strong></h1>
            <h2>Real Estate Agents Dublin: All You Need to Know Before Selling Your Property</h2>
        </div>
        <a href="#" class="call-to-action">Explore our properties</a>  
    </div>

</div>
    <section id="our-services">
        <div><i class="fal fa-home our-sv-img"></i><h2>Let Properties</h2><h3>No let, No fee!</h3><a href="#" class="sm-call-to-action">Explore</a></div>
        <div><i class="fal fa-key-skeleton our-sv-img"></i><h2>Sell Properties</h2><h3>No sell, No fee!</h3><a href="#" class="sm-call-to-action">Explore</a></div>
        <div><i class="fal fa-tasks our-sv-img"></i><h2>Property Management</h2><h3>Because we care</h3><a href="#" class="sm-call-to-action">Explore</a></div>
        <div><i class="fal fa-comment-alt-dollar our-sv-img"></i><h2>Property Valuation</h2><h3>The value you deserve</h3><a href="#" class="sm-call-to-action">Explore</a></div>
    </section>
    <section id="search-property">
        <h2>Search our available properties</h2>
        <form action="" method="GET" id="form-search">
            <div>
                <label for="type">TYPE</label><br>
                <select name="type" id="type">
                    <option value="type">Type</option>
                </select>
            </div>
            <div>
                <label for="location">Location</label><br>
                <select name="location" id="location">
                    <option value="location">location</option>
                </select>
            </div>
            <div>
                <label for="max-bedrooms">max-bedrooms</label><br>
                <select name="max-bedrooms" id="max-bedrooms">
                    <option value="max-bedrooms">max-bedrooms</option>
                </select>
            </div>
            <div>
                <label for="max-price">max-price</label><br>
                <select name="max-price" id="max-price">
                    <option value="max-price">max-price</option>
                </select>
            </div>
            <button class="sm-call-to-action">Search</button>
        </form>
    </section>
</main>

<?php
    include 'includes/footer.php';
?>