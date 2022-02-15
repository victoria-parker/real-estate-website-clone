<?php
    include 'includes/header.php';
?>
<main>
    <div class="hero-index bg-img">
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
                <label for="amount-of-bedrooms">Amount of bedrooms</label><br>
                <select name="amount-of-bedrooms" id="amount-of-bedrooms">
                    <option value="amount-of-bedrooms">Amount of bedrooms</option>
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




    <section class="featured-properties">
        <h2>Featured Sale Properties</h2>
        <div class="fp-container">
            <div class="featured-property">
                <h4>House 23, Green Tree Street, Dublin</h4>
                <div class="img-container">
                <img src="images/placeholder-house.jpg" alt="house">
                </div>
                <span class="price">$199.999,00</span>
                <span>House for sale</span>
            </div>
            <div class="featured-property">
                <h4>House 23, Green Tree Street, Dublin</h4>
                <div class="img-container">
                <img src="images/placeholder-house.jpg" alt="house">
                </div>
                <span class="price">$199.999,00</span>
                <span>House for sale</span>
            </div>
            <div class="featured-property">
                <h4>House 23, Green Tree Street, Dublin</h4>
                <div class="img-container">
                <img src="images/placeholder-house.jpg" alt="house">
                </div>
                <span class="price">$199.999,00</span>
                <span>House for sale</span>
            </div>
        </div>
    </section>



    <section class="featured-properties">
        <h2>Featured Rent Properties</h2>
        <div class="fp-container">
            <div class="featured-property">
                <h4>House 23, Green Tree Street, Dublin</h4>
                <div class="img-container">
                    <img src="images/placeholder-house.jpg" alt="house">
                </div>
                <span class="price">$1.999,00</span>
                <span>House for rent</span>
            </div>
            <div class="featured-property">
                <h4>House 23, Green Tree Street, Dublin</h4>
                <div class="img-container">
                    <img src="images/placeholder-house.jpg" alt="house">
                </div>
                <span class="price">$1.999,00</span>
                <span>House for rent</span>
            </div>
            <div class="featured-property">
                <h4>House 23, Green Tree Street, Dublin</h4>
                <div class="img-container">
                    <img src="images/placeholder-house.jpg" alt="house">
                </div>
                <span class="price">$1.999,00</span>
                <span>House for rent</span>
            </div>
        </div>
    </section>


    <section class="articles">
        <div class="articles-text">
            <span>THINKING TO SELL?</span>
            <h2>Selling your Property?</h2>
            <p>We believe that the real estate world should be very simple. Thanks to our technology and our team, we are able to buy homes in just 7 days, renovate them and put them up for sale again. A completely new experience whether you buy or sell.</p>
            <a href="#" class="sm-call-to-action">contact our agents</a>
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
            <a href="#" class="sm-call-to-action">contact our agents</a>
        </div>
    </section>


    <section class="contact-section bg-img">
        <div class="articles-text" style="background-color: transparent;">
            <span>Need consultation?</span>
            <h2>Send Us a Message</h2>
            <p>Please feel free to drop us a line if you have any question.We'll get back to you as soon as possible!</p>
        </div>
        <form action="#" method="POST">

            <div class="form-el">
                <label for="full-name">Full Name</label>
                <input type="text" name="full-name" id="full-name">
            </div>
            <div class="form-el">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-el">
                <label for="phone">Phone number</label>
                <input type="tel" name="phone" id="phone">
            </div>
            <div class="form-el">
                <label for="message">You Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <button class="sm-call-to-action">Submit</button>    
        </form>
    </section>
</main>

<?php
    include 'includes/footer.php';
?>