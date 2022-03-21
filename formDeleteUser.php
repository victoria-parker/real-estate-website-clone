<?php
      include 'includes/header.php';
      require 'config/config.php';
      $User=new User;
      $User->authenticate();
      $User->authenticateAdmin();
      $User->seeUserById();
?>
<main class="main_admin bg-img center">
    <h1>Delete a User Section</h1>
    <div class="delete-box">
            <form action="deleteUser.php" method="post" class="delete-form">

                <span> <?=$User->getUserName()?> with the email <?=$User->getUserEmail()?> will be deleted from our system</span>

                <input type="hidden" name="userId" value="<?=$User->getUserId()?>">
                <input type="hidden" name="userEmail" value="<?=$User->getUserEmail()?>">

                <button class="adminBtn formDeleteBtn">Proced to Delete</button>
            </form>
            <br>
        </div>
        
        <a href="usersAdmin.php" class="go-back-btn check-btn">Go back to admin</a>


        <script>
                Swal.fire({
                    title: 'Are you sure you want to delete this user?',
                    text: "This action can't be undone",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'No, I don\'t want to delete it',
                    cancelButtonColor: '#7e7b7b',
                    confirmButtonColor: '#dd0000',
                    confirmButtonText: 'Yes, I want to delete it!'
                }).then((result) => {
                    if (!result.value) {
                        window.location='usersAdmin.php';
                    }
                })
            </script>
</main>
<?php
    include 'includes/footer.php';
?>
