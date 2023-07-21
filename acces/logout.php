<?php
session_start();
     unset($_SESSION['Nom']) ;
     session_destroy();

    header("location: ../index.php");
?>