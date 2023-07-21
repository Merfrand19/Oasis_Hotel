
  <?php
    include('../header.php');
  session_start();
  if(isset($_SESSION['pswd'])){
    unset($_SESSION['pswd']);
    unset($_SESSION['Nom']);
    unset($_SESSION['Email']);
    unset($_SESSION['Tel']);

  }
if (isset($_SESSION['erreur']) ) {
    echo $_SESSION['erreur'];
    unset($_SESSION['erreur']);
}

if (isset($_SESSION['Email'])) {
  header('location: ../Profil/profil.php');
}
  ?>
    <div class="main">
      <input type="checkbox" id="chk" aria-hidden="true" />

      <div class="signup">
        <form method="post" action="inscription.php">
          <label for="chk" aria-hidden="true" class="label">S'inscrire</label>
          <input class="input" type="text" name="Nom" class="label" placeholder="Nom et Prénoms" required="" />
          <input class="input" type="email" name="Email"  class="label" placeholder="Email" required="" />
          <input class="input"
            type="tel"
            name="tel"
            placeholder="Numéro de téléphone"
            required=""
          /> 
          <input
            class="input"
            type="password"
            name="pswd"
            placeholder="Mot de passe"
            required="" class="label"
          />
          <button class="soumettre">S'inscrire</button>
        </form>
      </div>

      <div class="login">
        <form method="post" action="connexion.php">
          <label for="chk" class="label" aria-hidden="true">Se connecter</label>
          <input  class="input" type="email" name="Email" placeholder="Email" required="" />
          <input
          class="input"
            type="password"
            name="pswd"
            placeholder="Mot de passe"
            required=""
          />
          <button class="soumettre">Se connecter</button>
        </form>
      </div>
    </div> <?php
    include('../footer.php');?>
  </body>
</html>
