<?php
    require 'database.php';
     session_start();
    $db=Database::connect();
    $mail =checkInput($_POST['Email']);
    $motDePasse = checkInput($_POST['pswd']); 
    $connexionPossible = false;
    $statement=$db->query("SELECT Email FROM clients");
    $emails = $statement->fetchALL(PDO::FETCH_ASSOC);
    foreach ($emails as $element) 
    { 
        if($element['Email'] == $mail){
         $connexionPossible = true;
         break;
        }
    }
    if ($connexionPossible) 
    {
       $statement=$db->query("SELECT * FROM clients where Email='$mail'");
       $compte = $statement->fetch(PDO::FETCH_ASSOC);
        if ($compte['password'] == $motDePasse) {
            
            $_SESSION['Nom'] = $compte['Nom'];
            $_SESSION['Tel'] = $compte['Telephone'];
            $_SESSION['Email'] = $mail;
            $_SESSION['id']= $compte['id'];
            
            header('location: ../reserver/presentation.php');
        }
        else
        {
            $_SESSION['erreur'] = '<p>Vous avez mal saisi vos identifiants</p>';
        header('location: login.php');
        }
    } 
    else 
    {
        $_SESSION['erreur'] = '<p>Vous avez mal saisi vos identifiants</p>';
        header('location: login.php');
    }



    function checkInput($data) 
    {
    $data = trim($data);
    $data = stripslashes($data);
    $data= strip_tags($data);
    $data = htmlspecialchars($data);
    return $data;


    }
?>