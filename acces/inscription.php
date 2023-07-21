<?php
    require 'database.php';
    $db=Database::connect();
    $client_exist = false;
    $nom =checkInput($_POST['Nom']);
    $email=checkInput($_POST['Email']);
    $numero=checkInput($_POST['tel']);
    $motDePasse=checkInput($_POST['pswd']);
    session_start();
    $_SESSION=$_POST;
    

    // // Préparation du mail contenant le lien d'activation
    // $destinataire = $email;
    // $sujet = "Activer votre compte" ;
    // $entete = "From: gratiaslokonon19@gmail.com" ;
    
    // // Le lien d'activation est composé de la clé(cle)
    // $message = 'Vous avez créer un code sur le site de Oasis Hotel.

    // Votre code de confirmation est: '.$cle.'.
    
    
    
    // ---------------
    // Ceci est un mail automatique, Merci de ne pas y répondre.';


    $statement=$db->query("SELECT Email FROM clients");
    $listMail= $statement->fetchALL(PDO::FETCH_ASSOC);
    foreach ($listMail as $Mail) 
    {
        if($Mail['Email'] == $email){
            $client_exist = true;
            break;
        }
    }
    if($client_exist == false)
    {
        // $sql = $db->prepare("INSERT INTO clients (Nom,Email,Telephone,password,Code) values(?, ?, ?, ?, ?)");
        // $sql->execute(array($nom,$email,$numero,$motDePasse,$cle));
        Database::disconnect();
        $_SESSION['cle']=mt_rand(100000, 999999);
        print($_SESSION['cle']);
        header('location: confirmation-inscription.php');

        // Envoi du mail
        //mail($destinataire, $sujet, $message, $entete);
    }  
    else{
        echo 'Cette adresse email a déja ete utilisée';
        
    }
    

    function checkInput($data) 
    {
    $data = trim($data);
    $data = stripslashes($data);
    $data=strip_tags($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>















