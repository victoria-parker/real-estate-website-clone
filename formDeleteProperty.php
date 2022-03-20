<?php
      include 'includes/header.php';
      require 'classes/Connexion.php';
      require 'classes/Property.php';
      $Property=new Property();
      $Property->seePropertyById();
?>
<main class="main_admin bg-img center">
    <h1>Delete a Property Section</h1>
    <div class="delete-box">
            <form action="deleteProperty.php" method="post" class="delete-form">

                <span>The <?=$Property->getPropertyType()?> located in <?=$Property->getAddress()?> will be deleted from our system</span>

                <input type="hidden" name="identifier" value="<?=$Property->getIdentifier()?>">
                <input type="hidden" name="address" value="<?=$Property->getAddress()?>">

                <button class="adminBtn formDeleteBtn">Proced to Delete</button>
            </form>
            <br>
        </div>
        
        <a href="admin.php" class="go-back-btn check-btn">Go back to admin</a>

















        <script>
                Swal.fire({
                    title: 'Are you sure you want to delete this propery?',
                    text: "This action can't be undone",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'No, I don\'t want to delete it',
                    cancelButtonColor: '#7e7b7b',
                    confirmButtonColor: '#dd0000',
                    confirmButtonText: 'Yes, I want to delete it!'
                }).then((result) => {
                    if (!result.value) {
                        //redireccion al panel
                        window.location='adminDestinos.php';
                    }
                })
            </script>
</main>
<?php
    include 'includes/footer.php';
?>
