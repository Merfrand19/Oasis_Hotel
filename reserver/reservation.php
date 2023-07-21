<?php
require '../acces/database.php';
session_start();
if (!isset($_SESSION['Nom'])){
  $_SESSION['erreur'] = 'Connectez-vous pour procéder à la réservation.';
  header('location: ../acces/login.php');
}


$db=Database::connect();
$num = $_GET['numero'];
 $statement=$db->query("SELECT * FROM chambres WHERE numero = '$num'");
    $chambre = $statement->fetchALL(PDO::FETCH_ASSOC);
$chambre = $chambre[0];
include('../header.php');

?>

    <section class="form">
      <div class="op">
        <img src="../images/<?= $chambre['Image']?>" alt="" />
      </div>
      <form class="reservation-form" method="POST" action="confirmation-paiement.php">
                   
        
        <div class="containers">
          <label for="dateA">Arrivée: </label>
          <div class="divS">
            <input
              type="date"
              name="arrivee"
              min="<?= date('Y-m-d') ?>"
              max="<?= date('Y-m-d', time()+(3600*48)) ?>"
              id="dateA"
              required
            />
          </div> 
        </div>
        <div class="containers">
          <label for="date">Départ: </label>
          <div class="divS">
          <input type="date" name="depart" min="" max="" id="date" required disabled/>
          </div>
        </div>
        <div class="containers">
          <label for="nbrA">Nombre Adulte: </label>
         <div class="divS">
         <input
            type="number"
            name="nbreAdulte"
            value="0"
            step="1"
            min="0"
            id="nbrA"
            required
          />
         </div>
        </div>
        <div class="containers">
          <label for="nbrE">Nombre Enfant: </label>
          <div class="divS">
          <input
            type="number"
            name="nbreEnfant"
            value="0"
            min="0"
            step="1"
            id="nbrE"
            required
          />
          </div>
        </div>
        <p>Places : <span class = "capacite"><?= $chambre['capacite']?></span> personnes</p>
        <p>Total : <span class= "price"><?= $chambre['prix'] ?></span> Fcfa</p>


         <input type="hidden" name="numero" value="<?= $chambre['numero']?>">                        
                        <input type="hidden" class="nbrJour" name="nbrJour" value="">                                             

         <input type="hidden" name="prix" class="prixTotal" value="<?= $chambre['prix']?>">                        
        <input type="submit" value="Reserver" id="submit" disabled/>

           
      </form>
    </section>
<?php include('../footer.php');?>


  </body>
</html>


