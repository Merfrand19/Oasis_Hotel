<?php
use Endroid\QrCode\QrCode;
    require_once '../vendor/autoload.php';

    
    $nom=$_POST['Nom'];
    $id=$_POST['numeroReservation'];
    $numRes=$_POST['numeroReserver'];
    $tel=$_POST['Telephone'];
    $mail=$_POST['Email'];
    $arrive=$_POST['Arriver'];
    $depart=$_POST['Depart'];
    $dateCom=$_POST['DateCommande'];
    $prix=$_POST['Montant'];

    $qrCode= New QrCode('Your reservation code is '.$_POST['numeroReservation'].'');
    //header('Content-Type: '.$qrCode->getContentType());
    $qrCode->writeFile('qrcode.png');
    //header("Location: filepdf.php");


    use Dompdf\Dompdf;
    

        $dompdf= new Dompdf();
        
        
        
        
        
        
        
        
        $html= " 
        
        
        
        
        
        
                <body style='margin: 50px'>
                <header style='display: flex;
                flex-direction: row;
                justify-content:space-between;
                border-bottom: 2px solid #1cc3b2;
                padding: 10px 0px;
            '>
            <div style='border-bottom: 2px solid #1cc3b2;'>
                <h3 style=' color: #1cc3b2;'>Fiche de réservation</h3>
                <h4>Id: $id </h4>
            </div>
            </header>
            <div style='
            padding: 2px 0px;
            margin-top: 10px;'>
            <p style='font-weight: bold;'>Oasis Hotel</p>
            <div style='line-height: 1.5rem'>
            Tchaorou Von en face Ceg Tchaorou<br>
            Télephone: +229 97875480<br>
            Email: gratiaslokonon19@gmail.com<br>
            </div>
            </div>
            
            <div style='
            padding: 5px 0px;
            border-bottom: 2px solid #1cc3b2;
            display: block;
            width:100%;
            
            
            >
                <div style=' font-weight: bold; float:left; width: 30%  '>
                    <p>Nom du client : </p>
                    <p>Numéro de télephone :</p>
                    <p>Email :</p>
                    <p>Numéro de réservation : </p>
                    <p>Numéro de Pièce:</p>
                    <p>Date d'arrivée :</p>
                    <p>Nom de départ :</p>
                    <p>Montant Payé :</p>
                </div>
                <div style=' float:left; width: 30%' >
                    <p>$nom</p>
                    <p>$tel</p>
                    <p>$mail</p>
                    <p>$id </p>
                    <p>$numRes </p>
                    <p>$arrive </p>
                    <p>$depart </p>
                    <p>$prix Fcfa</p>
                </div>
            </div>
            <div style='display:flex; justify-content:center;'>
            <p style='width: 12%;' ><img width='100%'src='qrcode.png'/></p>
            </div>
            <p style='text-align: center;''>En quoi de foi ce présent code pourrait valoir de droit</p>

            </body>
            ";
                $dompdf->loadHtml($html);
                $dompdf->render();
                $dompdf->stream('fiche_reservation.pdf');
?> 
    