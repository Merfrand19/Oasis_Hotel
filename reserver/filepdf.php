<?php

use Dompdf\Dompdf;

     require_once '../vendor/autoload.php';

     $dompdf= new Dompdf();
     $html= file_get_contents('download.php');
     $dompdf->loadHtml($html);
     $dompdf->render();
     $dompdf->stream('fiche_reservation.pdf');
?>