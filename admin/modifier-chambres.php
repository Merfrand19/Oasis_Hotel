<?php
    session_start();
    if(empty($_SESSION['Email'] )){
        header('location: login.php');
    }
    if(!empty($_GET))
    {
        $id= $_GET['id'];
        $type=checkInput($_GET['type']);
    }

    require '../acces/database.php';
    $categorieError = $numeroError = $decritError = $pieceError = $capaciteError = $prixError = $imageError = $categorie = $numero = $piece = $description = $capacite = $prix= $image="";
    
   
    
    if(!empty($_POST))
    {
        $id=                checkInput($_POST['id']);
        $categorie=         checkInput($_POST['categorie']);
        $numero=            checkInput($_POST['numero']);
        $description=       checkInput($_POST['decrit']);
        $piece=             checkInput($_POST['piece']);
        $capacite=          checkInput($_POST['capacite']);
        $prix=              checkInput($_POST['prix']);
        $image =            checkInput($_FILES['image']['name']);
        $imagePath =        '../images/'.basename($image);
        $imageExtension=     pathinfo($imagePath, PATHINFO_EXTENSION);
        $isSuccess= true;
        
        $isUploadSuccess = true;
        $isImageUpdated=true;

        if(empty($categorie))
        {
            $categorieError ='Ce champ ne peut etre vide';
            $isSuccess= false;
        }
        if(empty($numero))
        {
            $numeroError ='Ce champ ne peut etre vide';
            $isSuccess= false;
        }
        if(empty($description))
        {
            $decritError ='Ce champ ne peut etre vide';
            $isSuccess= false;
        }
        if(empty($piece))
        {
            $pieceError ='Ce champ ne peut etre vide';
            $isSuccess= false;
        }
        if(empty($capacite))
        {
            $capaciteError ='Ce champ ne peut etre vide';
            $isSuccess= false;
        }
        if(empty($prix))
        {
            $prixError ='Ce champ ne peut etre vide';
            $isSuccess= false;
        }
        if(empty($image))
        {
            $isImageUpdated=false;
            if($isSuccess)
            {
                $db = Database::connect();
                $statement = $db->prepare("UPDATE chambres set numero=?, categorie=?, Pieces=?, description=? ,capacite=?, prix=? WHERE id=?");
                $statement->execute(array($numero,$categorie,$piece,$description,$capacite,$prix,$id));
                Database::disconnect();
                header("Location: index.php");
            }
        }
        else
        {
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" ) 
            {
                $imageError = "Les fichiers autorises sont: .jpg, .jpeg, .png ";
                $isUploadSuccess = false;
            }
            // if(file_exists($imagePath)) 
            // {
            //     $imageError = "Le fichier existe deja";
            //     $isUploadSuccess = false;
            // }
            if($_FILES["image"]["size"] > 800000) 
            {
                $imageError = "Le fichier ne doit pas depasser les 800KB";
                $isUploadSuccess = false;
            }
             if($isUploadSuccess) 
             {
                 if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) 
                 {
                     $imageError = "Il y a eu une erreur lors de l'upload";
                     $isUploadSuccess = false;
                 } 
             } 
        }
       
        if( ( $isSuccess && $isImageUpdated && $isUploadSuccess) || ( $isSuccess && $isImageUpdated) ) 
        {
           $db = Database::connect();
           if($isImageUpdated)
           {
             echo 'isImageUpdated';
             $statement = $db->prepare("UPDATE chambres set numero=?, image=?, categorie=?, Pieces=?, description=? ,capacite=?, prix=? WHERE id=?");
             $statement->execute(array($numero,$image,$categorie,$piece,$description,$capacite,$prix,$id));
           }
           else
           {
             $statement = $db->prepare("UPDATE chambres set numero=?, categorie=?, Pieces=?, description=? ,capacite=?, prix=? WHERE id=?");
             $statement->execute(array($numero,$categorie,$piece,$description,$capacite,$prix,$id));
           }
           Database::disconnect();
           header("Location: index.php");
         }
        else if($isImageUpdated=true && !$isUploadSuccess)
        {
            
            $db= Database::connect();
            $statement = $db->query(" SELECT * FROM chambres WHERE id='$id' ");
            $chambre =   $statement->fetch();
            $image=      $chambre['Image'];
            Database::disconnect(); 
            header("Location: chart.php");
        }
     }
    else
    {
         $db= Database::connect();
         $statement = $db->prepare ("SELECT  * FROM chambres WHERE id=?"); 
         $statement->execute(array($id));
         $chambre = $statement->fetch();
         $numero= $chambre['numero'];
         $image= $chambre['Image'];
         $categorie= $chambre['categorie'];
         $piece= $chambre['Pieces'];
         $description= $chambre['description'];
         $capacite= $chambre['capacite'];
         $prix= $chambre['prix'];
         Database::disconnect(); 
     }
    


    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 3</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <!-- <img src="images/icon/logo-white.png" alt="CoolAdmin" /> -->
                            <h3 style="color: #fff;">Oasis Hotel</h3>
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span class="bot-line"></span>Tableau de bord</a>
                            </li>
                            <li>
                                <a href="table.php">
                                    <i class="fas fa-table"></i>
                                    <span class="bot-line"></span>Tables</a>
                            </li>
                            <li>
                                <a href="chart.php">
                                    <i class="fas fa-chart-bar"></i>
                                    <span class="bot-line"></span>Graphes</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="admin" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Admin</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="admin" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Admin</a>
                                            </h5>
                                            <span class="email">admin@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <!-- <img src="images/icon/logo-white.png" alt="CoolAdmin" /> -->
                            <h3 style="color: #fff;">Oasis Hotel</h3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Tableau de bord</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Graphes</a>
                        </li>
                    </ul>    
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
            <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>You got a email notification</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">admin</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">admin</a>
                                    </h5>
                                    <span class="email">admin@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
           

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Bienvenue
                                <span>admin</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div  class="col-sm-6">
                                <form class="form" action="modifier-chambres.php" role="form" method="post" enctype="multipart/form-data">
                                   
                                    <?php
                                    if($type =='chambre'){
                                ?>   
                                     <div class="form-group">
                                        <label for="categorie">Catégorie:</label>
                                        <input type="text" class="form-control" id="categorie" name="categorie" placeholder="Catégorie de chambre" value="<?= $categorie;?>">
                                        <span class="text-danger"><?php  $categorieError?></span>
                                    </div>
                                <?php
                                      }
                                      else{
                                ?>
                                         <div class="form-group">
                                        <input type="hidden" class="form-control" id="categorie" name="categorie" placeholder="Catégorie de chambre" value="<?= $categorie;?>">
                                        <span class="text-danger"><?php  $categorieError?></span>
                                    </div>
                                <?php
                                      }
                                ?>

                                    <div class="form-group">
                                        <label for="prix">Numéro</label>
                                        <input type="text" class="form-control" id="numero" name="numero" min="1" placeholder="Numéro de la chambre" value="<?= $numero;?>">
                                        <span class="text-danger"><?php  echo $numeroError;?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="decrit">Description:</label>
                                        <input type="textarea" rows="5" cols="33" class="form-control" value="<?= $description?>" id="decrit" name="decrit" placeholder="Brève description de la chambre" >
                                        <span class="text-danger"><?php  $decritError?></span>
                                    </div>
                                    
                                    <?php
                                    if($type =='chambre'){
                                ?>   
                                     <div class="form-group">
                                        <label for="prix">Pièces</label>
                                        <input type="number" step="1" class="form-control" id="piece" name="piece" min="1" placeholder="Nombre de pièces de la chambre" value="<?php echo $piece;?>">
                                        <span class="text-danger"><?php  echo $pieceError;?></span>
                                    </div>
                                <?php
                                      }
                                      else{
                                ?>
                                    <div class="form-group">
                                        <input type="hidden" step="1" class="form-control" id="piece" name="piece" min="1" placeholder="Nombre de pièces de la chambre" value="<?php echo $piece;?>">
                                        <span class="text-danger"><?php  echo $pieceError;?></span>
                                    </div>                                <?php
                                      }
                                ?>
                                    <div class="form-group">
                                        <label for="prix">Capacité</label>
                                        <input type="number" step="1" class="form-control" id="capacité" min="1" name="capacite" placeholder="Nombre de personnes que peut contenir la chambre" value="<?php echo $capacite;?>">
                                        <span class="text-danger"><?php echo $capaciteError;?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="prix">Prix: (en FCFA)</label>
                                        <input type="number" step="1" class="form-control" min="1" id="prix" name="prix" placeholder="Prix" value="<?php echo $prix;?>">
                                        <span class="text-danger"><?php echo $prixError;?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        <p><?php echo $image;?></p>
                                        <label for="image">Sélectionner une nouvelle image:</label>
                                        <input type="file" id="image" name="image"> 
                                        <span class="text-danger"><?php echo $imageError;?></span>
                                    </div>
                                    <input type="hidden" value="<?= $id ?>" name="id">
                                    <br>
                                    <div class="form-actions">
                                    <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Modifier</button>
                                        
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6 site">
                                <div class="thumbnail">
                                <img src="<?php echo '../images/'.$image;?>"  alt="...">
                                </div>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

 <!-- COPYRIGHT-->
 <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2023 <a href="https://colorlib.com">Oasis Hotel</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> 
    <script nomodule  src ="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>


</html>
<!-- end document-->