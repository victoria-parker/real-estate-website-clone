<?php
    include 'includes/header.php';
    require 'config/config.php';
    $User=new User;
    $User->authenticate();
    $User->authenticateAdmin();
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
                <td><a href="formModifyUser.php?id=<?=$user['id']?>" class="modifyBtn adminBtn">Modify</a></td>
                <?php
                 if($user['adminPermits'] == false){
                ?>
                <td><a href="formDeleteUser.php?id=<?=$user['id']?>" class="deleteBtn adminBtn">Delete</a></td>
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