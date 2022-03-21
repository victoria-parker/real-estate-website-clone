<?php

    require 'config/config.php';
    $User=new User;
    $User->authenticate();
    $User->authenticateAdmin();
    $User->seeUserById();
    include 'includes/headerAdmin.php';
?>
    <main class="main_admin bg-img center">
        <h1>Add a User</h1>

        <form class="admin-form" method="POST" action="modifyUser.php" >
            <div>

            <div>
            <label for="userName">User Name</label>
            <input type="text" name="userName" id="userName" value="<?=$User->getUserName()?>" required>
            </select>
            </div>

            <div>
            <label for="userEmail">User Email</label>
            <input type="email" name="userEmail" id="userEmail" value="<?=$User->getUserEmail()?>"required>
            </div>

            <div>
                <label for="userPassword">Password</label>
                <input type="text" name="userPassword" id="userPassword" value="<?=$User->getUserPassword()?>"required>
            </div>

            <div>
                <p>Admin Permits<p>

                <?php
                    if($User->getAdminPermits() == true){
                ?>
                <div class="radio-div">
                    <label for="adminPermitsYes">Yes</label>
                    <input type="radio" name="adminPermits" id="adminPermitsYes" value="true" checked>
                </div>

                <div class="radio-div">
                    <label for="adminPermitsNo">No</label>
                    <input type="radio" name="adminPermits" id="adminPermitsNo" value="false">
                </div>
                <?php
                }else{
                ?>
                                <div class="radio-div">
                    <label for="adminPermitsYes">Yes</label>
                    <input type="radio" name="adminPermits" id="adminPermitsYes" value="true">
                </div>

                <div class="radio-div">
                    <label for="adminPermitsNo">No</label>
                    <input type="radio" name="adminPermits" id="adminPermitsNo" value="false" checked>
                </div>
                <?php
                }
                ?>
            </div>
            
            <input type="hidden" name="userId" value="<?=$User->getUserId()?>">

            <button class="sm-call-to-action">Submit</button>
        </form>
        <a href="usersAdmin.php" class="go-back-btn">Go back to admin</a>
    </main>
<?php
    include 'includes/footer.php';
?>