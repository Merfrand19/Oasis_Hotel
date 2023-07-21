<?php
    require '../acces/database.php';
     session_start();
    $db=Database::connect();
    $mailError=$passwordError=" ";

    $mail =checkInput($_POST['Email']);
    $motDePasse = checkInput($_POST['pswd']); 
    $connexionPossible = false;
    $statement=$db->query("SELECT Email FROM admin");
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
       $statement=$db->query("SELECT * FROM admin where Email='$mail'");
       $compte = $statement->fetch(PDO::FETCH_ASSOC);
        if ($compte['Password'] == $motDePasse){
            
            $_SESSION['Email'] = $mail;
            $_SESSION['Password'] = $motDePasse;
            $_SESSION['Grade']=$compte['Grade'];
            
            header('location: index.php');
        }
        else
        {
            header('location: login.php');
        }
    } 
    else 
    {
        
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
