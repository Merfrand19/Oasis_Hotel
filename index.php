
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Bienvenue a Oasis Hotel</title>
    
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
                <a href="acces/login.php"><ion-icon name="person-circle-outline"></ion-icon></a>
            </div>
       </div>
       <div class="h-main">
        <i>Oasis-H</i>
            <nav>
              <a href="#" id="link"><span id="burger"></span></a>
                <ul class="list-unstyled">
                    <li><a href="/oasis">Accueil</a></li>
                    <li><a href="/oasis/index.php#Propos">A Propos</a></li>
                    <li><a href="/oasis/index.php#contact">Contact</a></li>
                    <li id="Reserver"><a href="reserver/presentation.php">Reservation</a></li>
                </ul>
            </nav>
       </div>
    </header>
    <section id="Accueil" >
        <h1>Bienvenue à Oasis Hotel</h1>
        <a href="#">DECOUVREZ CHEZ NOUS</a>
    </section>
    <section id="Propos">
        <h5 > A propos de nous</h5>
        <div id="about1">
                <div class="left">
                    <h2 >Bienvenue a Oasis Hotel</h2>
                    <p> Avec plus près de 500 chambres, 25 piscines, Oasis-H est un endroit calme ou il fait bon vivre 
                        et vous pouvez profiter de la beauté de la nature. Lorem ipsum dolor sit amet consectetur adi
                        pisicing elit. Quos sint debitis recusandae corporis in expedita velit cum autem, a aspernatur
                        quam non consequatur cupiditate nemo quisquam eum nesciunt facere ducimus!
                    </p>
                </div>
                <div class="right">
                  <img src="images/image4.jpg" alt="" id="vu">
                </div>
        </div>
        <div id="about2">
            <div class="service">
                <ion-icon name="wine-outline"></ion-icon>
                <p>Restaurant</p>
            </div>
            <div class="service">
                <ion-icon name="wifi-outline"></ion-icon>
                <p>Wifi Gratuit</p>
            </div>
            <div class="service">
                <ion-icon name="flower-outline"></ion-icon>
                <p>Jardin</p>
            </div>
            <div class="service">
                <ion-icon name="restaurant-outline"></ion-icon>
                <p>Nourriture</p>
            </div>
            <div class="service">
                <ion-icon name="water-outline"></ion-icon>
                <p>Piscine</p>
            </div>
        </div>
        </div>
    </section>
    <section id="Propos_suite">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/image12.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h2>First slide label</h2>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/image12.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h2>Salle de conférence</h2>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/image12.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h2>Third slide label</h2>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section id="contact">
        <h2>Contactez nous !!</h2>
       <div id="coordonnee">
        <a href="tel:+22968825153"><ion-icon name="call-outline"></ion-icon>(+229)68825153</a>
        <a href="mailtogratiaslokonon@gmail.com"><ion-icon name="mail-outline"></ion-icon>gratiaslokonon@gmail.com</a>
        <a href="https://wa.me/22968825153"><ion-icon name="logo-whatsapp"></ion-icon>(+229)68825153</a>
        <a href="https://www.facebook.com/mariogratias.lokonon"><ion-icon name="logo-facebook"></ion-icon>Hotel Oasis</a>
       </div>
    </section>
    <footer>
      <p>Oasis Hotel © Copyright 2023 </p>
  </footer>
    <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script> 
    <script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js" > </script>  
     <script src="js/main.js"></script>


<script src="js/bootstrap.js"></script>
</body>
</html>


UPDATE `reservations` SET `Status` = 'Terminer' WHERE `reservations`.`id` = 8;