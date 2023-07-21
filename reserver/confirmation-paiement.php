<?php
include('../header.php');
session_start();
function numReservation(){
    require '../acces/database.php';
    $db=Database::connect();
    $statement=$db->query("SELECT * FROM reservations ORDER BY id DESC LIMIT 1");
    $item=$statement->fetch(PDO::FETCH_ASSOC);
    $id=$item['id'];
    $id=$item['id']+1;
    $year=date("y");
    $year=strrev($year);
    $month=date("M");
    $f_month=$month[0];
    $day =date("d");
    return $year.$f_month.$day.$id;

}
?>

    <div class="container-paiement">
      <h1>Confirmez votre réservation.</h1>

      <form action="traitement.php" method="POST" class="form-paiement">
        <div>
          <label for="nom">Nom : </label
          ><input type="text" name="nom" id="nom" value="<?= $_SESSION['Nom']?>" disabled />
        </div>
        <div>
          <label for="Tel">Tel : </label
          ><input type="text" name="Tel" id="Tel" value="<?=$_SESSION['Tel']?>" disabled />
        </div>
        <div>
          <label for="Email">Email : </label
          ><input type="email" name="Email" id="Email" value="<?=$_SESSION['Email']?>"  />
        </div>
        <div>
          <label for="nombre">nombre de personnes : </label
          ><input type="text" name="nombre" id="nombre" value="<?=$_POST['nbreAdulte'] + $_POST['nbreEnfant']?>" disabled />
        </div>
        <div>
          <label for="numero">numéro de chambre : </label
          ><input type="text" name="numero" id="numero" value="<?=$_POST['numero']?>" disabled />
        </div>
        <div>
          <label for="nbrJour">nombre de jour : </label
          ><input type="text" name="nbrJour" id="nbrJour" value="<?=$_POST['nbrJour']?>" disabled />
        </div>
        <div>
          <label for="arrivee">arrivée : </label
          ><input type="date" name="arrivee" id="arrivee" value="<?=$_POST['arrivee']?>" disabled />
        </div>
        <div>
          <label for="depart">départ : </label
          ><input type="date" name="depart" id="depart" value="<?=$_POST['depart']?>" disabled />
        </div>
        <div>
          <label for="numero">numéro de réservation : </label
          ><input type="text" name="numeroReservation" id="numero" value="<?=numReservation()?>" disabled />
        </div>
        <div>
          <label for="prix">Prix : </label
          ><input type="text" name="prix" id="prix" value="<?=$_POST['prix']?>" disabled />
        </div>

        <input type="submit" class="soumettre versPaiement" value="Passez au paiement" />
      </form>
    </div>
 <script>

      // Pour garder les informations pour l'inscription de la commande dans la bdd

let bouton = document.querySelector(".versPaiement");
let form = document.querySelector('form');
bouton.addEventListener("click", function (e) {
  e.preventDefault();

  let inputs = document.querySelectorAll("input");
  
  inputs.forEach(input => {
      input.disabled = false;
  });

  alert("sucess");
  form.submit();
});


</script>

    <?php include('../footer.php');?>
   
  </body>
</html>