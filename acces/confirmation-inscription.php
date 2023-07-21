<?php
    require 'database.php';
    $db=Database::connect();
    
    session_start();
    //var_dump($_SESSION);
    // Préparation du mail contenant le lien d'activation
    $destinataire = $_SESSION['Email'];
    $sujet = "Activer votre compte" ;
    $entete = "From: gratiaslokonon19@gmail.com" ;
    
    // Le lien d'activation est composé de la clé(cle)
    $message = 'Vous avez créer un code sur le site de Oasis Hotel.

    Votre code de confirmation est: '.$_SESSION['cle'].'.
    
    
    
    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre.';
    // Envoi du mail
    mail($destinataire, $sujet, $message, $entete);
    if(!empty($_POST)){
        $code=checkInput($_POST['cle']);
        if($code == $_SESSION['cle']){
            $sql = $db->prepare("INSERT INTO clients (Nom,Email,Telephone,password) values(?, ?, ?, ?)");
            $sql->execute(array($_SESSION['Nom'],$_SESSION['Email'],$_SESSION['tel'],$_SESSION['pswd']));
            Database::disconnect();
            header('location: login.php');
        } 
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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Code de Confirmation </title>
</head>
<body class="res-body">
<header>
     <div class="h-head">
          <div>
              <a href="tel:+22968825153"><ion-icon name="call-outline"></ion-icon><span class="hide">   (+229)68825153</span></a>
              <a href="mailtogratiaslokonon@gmail.com"><ion-icon name="mail-outline"></ion-icon><span class="hide">  gratiaslokonon@gmail.com</span></a>
          </div>
          <div>
              <a href="https://www.facebook.com/mariogratias.lokonon"><ion-icon name="logo-facebook"></ion-icon></a>
              <a href="https://wa.me/22968825153"><ion-icon name="logo-whatsapp"></ion-icon></a>
              <a href="login.php"><ion-icon name="person-circle-outline"></ion-icon></a>
          </div>
     </div>
     <div class="h-main">
      <i>Oasis-H</i>
      <nav>
        <a href="#" id="link"><span id="burger"></span></a>
          <ul class="list-unstyled">
            <li><a href="index.php#Accueil">Accueil</a></li>
            <li><a href="index.php#Propos">A Propos</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li id="Reserver"><a href="presentation.php">Reservation</a></li>
          </ul>
      </nav>
     </div>
  </header>
  <div class="msg">
    <p>Un code de confirmation a été envoyé sur votre adresse electronique. Veuillez le saisir dans le champ ci dessous afin de valider votre inscription. Au cas ou vous ne verrez pas ce code verifiez votre spam et reprenez l'inscription</p>
  </div>
    <form action="confirmation-inscription.php" method="post" id="confirmation">
        <div>
        <label for="code">Code de confirmation</label>
        <input type="number" name="cle"><br>
        </div>
        <button class="soumettre">Envoyer</button>
    </form>
    <?php
    include('../footer.php');?>
</body>
</html>