<?php
require '../acces/database.php';
session_start();
if (!isset($_SESSION['Nom'])){
  $_SESSION['erreur'] = 'Connectez-vous pour procéder à la réservation.';
  header('location: login.php');
}
$db=Database::connect();
include('../header.php');
?>

  <div class="profil">
      <div class="icone-profil">
          <ion-icon name="person"></ion-icon>
      </div>
      <div class="information-Personnelle">
       <p><span>Nom:</span> <?= $_SESSION['Nom'] ?></p>
       <p><span>Email:</span> <?= $_SESSION['Email'] ?></p> 
       <p><span>Télephone</span>: <?= $_SESSION['Tel'] ?></p>
       <!-- <p><a href="update-profil.php">Modifier votre mot de passe <span><ion-icon name="pencil-outline"></ion-icon></span></a></p> -->
       <p><a href="../reserver/mes-reservations.php">Mes Réservations</a></p>
       <p><a href="../acces/logout.php">Se Deconnecter <span><ion-icon name="log-out-outline"></ion-icon></span></a></p>
      </div>
  </div>    
<?php
    include('../footer.php');
?>
  </body>
</html>
