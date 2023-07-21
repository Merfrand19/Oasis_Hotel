<?php
    require '../acces/database.php';
$id = $_POST['id'];
$etat = $_POST['etat'];



$db = Database::connect();
$statement = $db->prepare("UPDATE chambres set disponible=? WHERE id=?");
$statement->execute(array($etat,$id));
Database::disconnect();
header("Location: index.php");