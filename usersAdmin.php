<?php
    include 'includes/header.php';
    require 'config/config.php';
    $User=new User;
    $User->authenticate();
    $users=$User->listUsers();
?>
<main class="main_admin bg-img">
    <h1>Users Admin Panel</h1>
    <table class="admin_table">
        <thead>
            <tr>
                <th>User Name</th>
                <th>User Email</th>
                <th colspan="2">
                    <a href="formAddUser.php" class="addBtn adminBtn">Add User</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($users as $user){
                    ?>
            <tr>
                <td><?=$user['userName']?></td>
                <td><?=$user['userEmail']?></td>
                <td><a href="formModifyUser.php?userEmail=<?=$user['userEmail']?>" class="modifyBtn adminBtn">Modify</a></td>
                <?php
                 if($user['userEmail'] !== 'admin@amin.com'){
                ?>
                <td><a href="formDeleteUser.php?userEmail=<?=$user['userEmail']?>" class="deleteBtn adminBtn">Delete</a></td>
                <?php
                }
                ?>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</main>
<?php
    include 'includes/footer.php';
?>