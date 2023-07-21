<?php
session_start();
    // if(empty($_SESSION['Email'] )) {
    //     header('location: login.php');
    // }
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
                            <li>
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Rechercher numéro de chambre" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
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

            <!-- STATISTIC-->
            <?php
                require '../acces/database.php';
                $db = Database::connect();
                $statement = $db->query("SELECT * FROM clients");
                
                
                $nbr_clients=0;
                while($rows= $statement->fetch()){
                    $nbr_clients=$nbr_clients+1;  
                }
                $statement = $db->query("SELECT * FROM reservations");
                $nbre_Services=0;
                while($rows= $statement->fetch()){
                    $nbre_Services=$nbre_Services+1;  
                }
                $start_date= strtotime("Monday this week");
                $end_date= strtotime("next Sunday", $start_date);
                $current_time= time();
                $week_commande=0;
                if($current_time > $start_date && $current_time < $end_date){
                    //Semaine actuelle
                    $week_commande=0;
                    $statement = $db->query("SELECT SUM(Montant) FROM reservations WHERE DateCommande >= DATE_SUB(FROM_UNIXTIME($start_date), INTERVAl 7 DAY )");
                    $row= $statement->fetch();
                    $week_commande= $row["SUM(Montant)"];
                   
                }
                else if ($current_time == $start_date){
                    $week_commande=0;
                }
                else{
                    $week_commande=0;
                }
                $statement = $db->query("SELECT Montant FROM reservations");
                $prix_R=0;
                while($rows= $statement->fetch()){
                    $prix_R=$prix_R+$rows['Montant'];  
                }
                
            ?> 
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number"><?= $nbr_clients?></h2>
                                <span class="desc">Comptes client</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number"><?= $nbre_Services?></h2>
                                <span class="desc">Reservations</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number"><?= $week_commande?></h2>
                                <span class="desc">7 derniers jours</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number"><?= $prix_R?></h2>
                                <span class="desc">Fcfa</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <!-- <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                             CHART PERCENT
                            <div class="chart-percent-3">
                                <h3 class="title-3 m-b-30">chart by %</h3>
                                <div class="chart-wrap">
                                    <canvas id="percent-chart2"></canvas>
                                    <div id="chartjs-tooltip">
                                        <table></table>
                                    </div>
                                </div>
                                <div class="chart-info">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note">
                                        <span class="dot dot--red"></span>
                                        <span>Services</span>
                                    </div>
                                </div>
                            </div>
                            END CHART PERCENT
                            
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Chambres</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                <a href="ajout-chambres.php?type=chambre"><button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                        <i class="zmdi zmdi-plus"></i>Ajouter</button></a>
                                </div>
                                <form method="POST" action="" class="table-data__tool-right">
                                    <input type="hidden" value="oui" name="disponible">
                                <button class="btn btn-success" type="submit" >
                                        Voir les disponibles</button>
                                </form>
                                <form method="POST" action="" class="table-data__tool-right">
                                <input type="hidden" value="non" name="indisponible">
                                <button class="btn btn-danger" type="submit" >
                                        Voir les indisponibles</button>
                                </form>
                            </div>
                            <div style="height:500px; overflow-y: scroll;" class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            
                                            <th>numero</th>
                                            <th>capacité</th>
                                            <th>description</th>
                                            <th>Nombre de Pièces</th>
                                            <th>status</th>
                                            <th>prix</th>
                                            <th>image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(isset($_POST['search']) && $_POST['search'] !=null){
                                        $num = $_POST['search'];
                                        $statement = $db->query("SELECT * FROM chambres WHERE numero='$num' AND type='chambre'");

                                    }

                                    else if(isset($_POST['disponible'])){
                                        $dispo=$_POST['disponible'];
                                        //echo $dispo;
                                       $statement = $db->query("SELECT * FROM chambres WHERE disponible='$dispo' AND type='chambre' ORDER BY id DESC");
                                    } 
                                    else if(isset($_POST['indisponible'])){
                                        $indispo=$_POST['indisponible'];
                                        //echo $dispo;
                                       $statement = $db->query("SELECT * FROM chambres WHERE disponible='$indispo' AND type='chambre' ORDER BY id DESC");
                                    } 
                                     else{
                                        $statement = $db->query("SELECT * FROM chambres WHERE type='chambre' ORDER BY id DESC");

                                    }

                                        while($item = $statement->fetch())
                                        {
                                    ?> 
                                        <tr class="tr-shadow">
                                            <td><?=$item['numero']?></td>
                                            <td>
                                                <span class="block-email"><?=$item['capacite']?> Personnes</span>
                                            </td>
                                            <td class="desc"><?=$item['description']?></td>
                                            <td><?=$item['Pieces']?></td>  
                                            <td>
                                            <?php 
                                                 if($item['disponible']=='oui'){ echo '<span class="status--process">Disponible</span>'; } else{ echo '<span class="status--denied">Occupé</span>';} 
                                            ?>
                                            </td>
                                            <td><?=$item['prix']?></td>
                                            <td><?= '<img src="../images/'.$item['Image'].'"';?></td>
                                            <td>
                                           
                                                <div class="table-data-feature">
                                                    <form style="margin-right: 7px;" action="voir-chambres" method="get">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>">
                                                        <button type="submit" class="item" data-toggle="tooltip"  data-placement="top" title="Voir"><i class="zmdi zmdi-eye"></i>
                                                        </button>
                                                    </form>
                                                   <form style="margin-right: 7px;" action="modifier-chambres.php" method="get">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>">
                                                        <input type="hidden" value="chambre" name="type">
                                                        <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                        <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                   </form>
                                                    <form style="margin-right: 7px;" action="supprimer-chambres.php" method="get">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>">
                                                        <button class="item" data-toggle="tooltip" type="submit" data-placement="top" title="Supprimer">
                                                        <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>
                                                    <form style="margin-right: 7px;" action="supprimer-chambres.php" method="get">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>">
                                                        <button class="item" data-toggle="tooltip" type="submit" data-placement="top" title="Supprimer">
                                                        <i class="zmdi zmdi-book"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <form action="modifier-etat.php" method="POST">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>">
                                                        <?php 
                                                        if($item['disponible'] == 'oui'){
                                                            
                                                            echo '          <input type="hidden" name="etat" value="non">
                                                            <input class="btn-success" style="padding:5px; margin-top: 8px;" type="submit" value="Disponible">';
                                                        } else {

                                                            echo '<input type="hidden" name="etat" value="oui"> <input class="btn-danger" style="padding:5px; margin-top: 8px;" type="submit" value="Indisponible">';
                                        
                                                        }
                                                        
                                                        ?>
                                                    </form>
                                            </td>
                                            
                                        </tr>
                                        <tr class="spacer"></tr>
                                    <?php
                                        }
                                    ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->


            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Salle de conférence</h3>
                            <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a href="ajout-chambres.php?type=SalleConf"><button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                        <i class="zmdi zmdi-plus"></i>Ajouter</button></a>
                                </div>
                                <form method="POST" action="" class="table-data__tool-right">
                                    <input type="hidden" value="oui" name="dispo">
                                <button class="btn btn-success" type="submit" >
                                        Voir les disponibles</button>
                                </form>
                                <form method="POST" action="" class="table-data__tool-right">
                                <input type="hidden" value="non" name="indispo">
                                <button class="btn btn-danger" type="submit" >
                                        Voir les indisponibles</button>
                                </form>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>numero</th>
                                            <th>capacité</th>
                                            <th>description</th>
                                            <th>status</th>
                                            <th>prix</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                         if(isset($_POST['search']) && $_POST['search'] !=null){
                                            $num = $_POST['search'];
                                            $statement = $db->query("SELECT * FROM chambres WHERE numero='$num' AND type='SalleConf'");
    
                                        } 
                                        else if(isset($_POST['dispo'])){
                                            $dispo=$_POST['dispo'];
                                            //echo $dispo;
                                           $statement = $db->query("SELECT * FROM chambres WHERE disponible='$dispo' AND type='SalleConf' ORDER BY id DESC");
                                        } 
                                        else if(isset($_POST['indispo'])){
                                            $indispo=$_POST['indispo'];
                                            //echo $dispo;
                                           $statement = $db->query("SELECT * FROM chambres WHERE disponible='$indispo' AND type='SalleConf' ORDER BY id DESC");
                                        } 
                                        else{
                                            $statement = $db->query("SELECT * FROM chambres WHERE type='SalleConf' ORDER BY id DESC");
    
                                        }
    
                                            while($item = $statement->fetch())
                                            {
                                    ?> 
                                         <tr class="tr-shadow">
                                            <td><?=$item['numero']?></td>
                                            <td>
                                                <span class="block-email"><?=$item['capacite']?> Personnes</span>
                                            </td>
                                            <td class="desc"><?=$item['description']?></td> 
                                            <td>
                                            <?php 
                                                 if($item['disponible']=='oui'){ echo '<span class="status--process">Disponible</span>'; } else{ echo '<span class="status--denied">Occupé</span>';} 
                                            ?>
                                            </td>
                                            <td><?=$item['prix']?></td>
                                            <td><?= '<img src="../images/'.$item['Image'].'"';?></td>
                                            <td>
                                           
                                                <div class="table-data-feature">
                                                    <form action="voir-chambres" method="get">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>">
                                                        <button type="submit" class="item" data-toggle="tooltip"  data-placement="top" title="Voir"><i class="zmdi zmdi-eye"></i>
                                                        </button>
                                                    </form>
                                                   <form action="modifier-chambres.php" method="get">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>">
                                                        <input type="hidden" value="SalleConf" name="type">
                                                        <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                        <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                   </form>
                                                    <form action="supprimer-chambres.php" method="get">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>">
                                                        <button class="item" data-toggle="tooltip" type="submit" data-placement="top" title="Supprimer">
                                                        <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>
                                                
                                                </div>
                                                <form action="modifier-etat.php" method="POST">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>">
                                                        <?php 
                                                        if($item['disponible'] == 'oui'){
                                                            
                                                            echo '          <input type="hidden" name="etat" value="non">
                                                            <input class="btn-success" style="padding:5px; margin-top: 8px;" type="submit" value="Disponible">';
                                                        } else {

                                                            echo '<input type="hidden" name="etat" value="oui"> <input class="btn-danger" style="padding:5px; margin-top: 8px;" type="submit" value="Indisponible">';
                                        
                                                        }
                                                        
                                                        ?>
                                                    </form>
                                            </td>
                                            
                                        </tr>
                                        <tr class="spacer"></tr>
                                    <?php
                                        }
                                        Database::disconnect();
                                    ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->





             

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
