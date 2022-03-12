<?php
    include 'includes/header.php';
    require 'classes/Message.php';
    require 'classes/vendor/autoload.php';

    $Message=new Message();
    $check=$Message->sendMessage();
?>
<div class="sendMessagePage bg-img">
        <?php
        if($check == 'success'){
        ?>
            <div class="msgSuccess">
                <p>Message sent successfully</p>
            </div>
        <?php
        }else{
        ?>
            <div class="msgFailed">
                <p>Sorry, we couldn't send your message, please try again later</p>
            </div>
        <?php
        }
        ?>
    </div>
<?php
    include 'includes/footer.php'
?>