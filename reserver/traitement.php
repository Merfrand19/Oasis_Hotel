<?php
session_start();
require '../acces/database.php';
$db = Database::connect();


echo '<pre>';
print_r($_POST);
echo '</pre>';

$db=Database::connect();
$nom = $_POST['nom'];
$tel = $_POST['Tel'];
$email = $_POST['Email'];



$nombre = $_POST['nombre'];
$nbrJour = $_POST['nbrJour'];
$numero = $_POST['numero'];
$arrivee = $_POST['arrivee'];
$depart = $_POST['depart'];
$prix = $_POST['prix'];
$type = 'Chambre';
$status = 'En cours';



$sql = $db->prepare("INSERT INTO reservations (Nom,Telephone, Email, Type, nbreDePersonne, numeroReserver, Arriver, Depart, Montant, Status) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$sql->execute(array($nom, $tel, $email, $type, $nombre, $numero, $arrivee, $depart, $prix, $status));
            Database::disconnect();
