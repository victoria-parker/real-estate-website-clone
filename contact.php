<?php
    include 'includes/header.php';
?>

<form action="#" method="POST">
            <label for="full-name">Full Name</label>
            <input type="text" name="full-name" id="full-name">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <label for="phone">Phone number</label>
            <input type="tel" name="phone" id="phone">
            
            <label for="message">You Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>

            <button class="sm-call-to-action">Submit</button>    
        </form>
    </section>



<?php
    include 'includes/footer.php'
?>