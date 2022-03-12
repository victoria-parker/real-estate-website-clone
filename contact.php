<?php
    include 'includes/header.php';
?>

<section class="contact-section bg-img">
        <div class="articles-text" style="background-color: transparent;">
            <span>Need consultation?</span>
            <h2>Send Us a Message</h2>
            <p>Please feel free to drop us a line if you have any question.We'll get back to you as soon as possible!</p>
        </div>
        <form action="sendMessage.php" method="POST">

        <div class="form-el">
            <label for="fullName">Full Name</label>
            <input type="text" name="fullName" id="fullName">
        </div>
        <div class="form-el">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="form-el">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject">
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
<?php
    include 'includes/footer.php'
?>