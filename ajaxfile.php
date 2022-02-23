<?php
    require 'classes/Connexion.php';
    require 'classes/Property.php';
    $identifier = $_POST['userid'];
    $Property=new Property();
    $Property->seePropertyById($identifier);
?>