<?php
      include 'includes/header.php';
      require 'classes/Connexion.php';

?>
<main class="main_admin bg-img center">
    <h1>Login</h1>
    <form action="login.php" method="post" class="admin-form">
        <div>
            <label for="userEmail">Email:</label>
            <input type="email" name="userEmail" id="userEmail">
        </div>
        <div>
            <label for="userPassword">Pasword:</label>
            <input type="password" name="userPassword" id="userPassword">
            <button class="sm-call-to-action" style="margin-top: 1.5rem;">Login</button>
        </div>
    </form>
    <?php
        if(isset($_GET['error'])){
            $error=$_GET['error'];
            $title='Wrong Credentials';
            $message='The email and/or the password are not correct';
            if($error == 2){
                $title='Access denied';
                $message='You need to login first';
            }
        ?>
        <script>
            Swal.fire(
                '<?=$title?>',
                '<?=$message?>',
                'error'
            );
        </script>
        <?php
        }
        ?>
</main>
<?php
    include 'includes/footer.php';
?>
