<?php require '../acces/database.php';
$db=Database::connect();
include('../header.php');
?>
<form method="post" action="presentation.php" class="search">
    <input type="search" name="requete" class="requete" placeholder="Que voudriez vous réserver ?">
    <input type="submit" class="envoie" value="Rechercher">
</form>
<section id="reservation">
    <!-- <h4>Nos chambres</h4> -->
    <div class="art-container">
    <?php         
        $statement=$db->query("SELECT * FROM chambres WHERE disponible='oui' ORDER BY id desc");
        $chambres = $statement->fetchALL(PDO::FETCH_ASSOC);
        foreach ($chambres as $chambre) {       
    ?>
        <form class="article" action="reservation.php" method="GET">
            <div class="image">
                <img src="../images/<?= $chambre['Image']?>" alt="">
            </div>
            <div class="short-description">
                <h2 style="margin-bottom: 10px;"><?= $chambre['categorie']?></h2>
                <?= $chambre['description']?>
                <ul style="margin-top: 10px;">
                    <li>Nombre de pièces : <?= $chambre['Pieces']?></li>
                    <li>Nombre maximal de personnes : <?= $chambre['capacite']?></li>
                    <li>Numéro de chambre : <?= $chambre['numero']?></li>
                </ul>
            </div>
            <div class="action">
                <p class="mini">A partir de</p>
                <p class="price-color"><?= $chambre['prix']?> Fcfa</p>
                <input type="hidden" name="numero" value="<?= $chambre['numero']?>">
                <input type="submit" id="a"  value="Réserver"/>
            </div>
        </form>
    <?php } ?>
    </div>
 </section>
<?php include('../footer.php');?>
<script src="../js/item.js"></script>
</body>
</html>