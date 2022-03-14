<?php
    include 'includes/header.php';
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $Property=new Property();
    $properties=$Property->listProperties();
?>
<main class="main_admin bg-img">
    <h1>Properties Admin Panel</h1>
    <table class="admin_table">
        <thead>
            <tr>
                <th>Identifier</th>
                <th>Transaction type</th>
                <th>Property type</th>
                <th>Address</th>
                <th>Image</th>
                <th>Price</th>
                <th>Description</th>
                <th>Main Featured</th>
                <th colspan="2">
                    <a href="formAddProperty.php" class="addBtn adminBtn">Add Property</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($properties as $property){
                    ?>
            <tr>
                <td><?=$property['identifier']?></td>
                <td><?=$property['transaction_type']?></td>
                <td><?=$property['property_type']?></td>
                <td><?=$property['address']?></td>
                <td><img src="images/<?=$property['transaction_type']?>/<?=$property['image']?>" alt="imagen"></td>
                <td><?=$property['price']?></td>
                <td><?=$property['description']?></td>
                <td><?=$property['mainFeatured']?></td>
                <td><a href="formModifyProperty.php?identifier=<?=$property['identifier']?>" class="modifyBtn adminBtn">Modify</a></td>
                <td><a href="formDeleteProperty.php?identifier=<?=$property['identifier']?>" class="deleteBtn adminBtn">Delete</a></td>
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