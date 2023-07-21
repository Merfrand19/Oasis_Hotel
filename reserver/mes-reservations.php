<?php
    require '../acces/database.php';
     session_start();
    $db=Database::connect();
    $mail=$_SESSION['Email'];
          $statement=$db->query("SELECT * FROM reservations where Email='$mail'");
          include('../header.php');
          $reservations = $statement->fetchALL(PDO::FETCH_ASSOC);
          if (isset($_SESSION['erreur'])) {
            echo $_SESSION['erreur'];
            unset($_SESSION['erreur']);
        }
        
        // if (isset($_SESSION['Email'])) {
        //     header('location: ../Profil/profil.php');
        // }
  
?>






        <h2 style="font-weight: normal;animation: fadeInUp 1s ease-in-out; text-align: center; padding-top: 2%; padding-bottom: 2%;" >
            Mes réservations
        </h2>
        <div class="liste-reservations">
            <h5>Date</h5>
            <h5>Numéro de réservation</h5>
            <h5>Fiche de réservation</h5>
        </div>
        <?php
            foreach($reservations as $reservation) 
            {
        ?>
        <div class="liste-reservations">
            <h5 style="color: rgb(43, 37, 41);"><?=$reservation['DateCommande'] ;?></h5>
            <h5 style="color: rgb(43, 37, 41);"><?=$reservation['numeroReservation'] ;?></h5>
            <h5 style="color: rgb(43, 37, 41);"><form method="POST" action="download.php">


           
        
        <?php
        $i = 0;
        foreach($reservation as $index => $value){        

            echo '<input type="hidden" name="'. $index .'" value="'. $value . '">';
            $i++;
        }
        ?>
        <input type="submit" value="Télécharger">
            </form> </h5>
        </div>
        <?php

            }
            Database::disconnect();
        ?>
        

            
<footer>
<p>Oasis Hotel © Copyright 2023 </p>
</footer>
    <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script> 
    <script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js" > </script>  
     
</body>
<script src="../js/main.js"></script>
<script src="../js/bootstrap.js"></script>
</html>