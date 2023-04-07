<?php
/* Cantidad de votos */
$ratepromedy = "SELECT * FROM rating WHERE gameid = '$id' AND tipo = '$tipo'";
$ratetiu = $conn->query($ratepromedy); 
$ratiq = mysqli_num_rows($ratetiu);
/* Suma de votos */
if($ratiq >= 1){
$ratesum = "SELECT SUM(stars) as stars FROM rating WHERE gameid = '$id' AND tipo = '$tipo'";
$ratesumu = $conn->query($ratesum);
$rowdi = mysqli_fetch_array($ratesumu);
$rowdmy = $rowdi['stars'];
/* Promedio estrellas */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$promedy = round($rowdmy/$ratiq, 1, PHP_ROUND_HALF_UP);
$mostaza = '<span><i class="fa fa-star"></i>'. $promedy.' ('.$ratiq.' votos)</span>';
}else{
   $mostaza = '<span><i class="fa fa-star"></i> 0 (No hay votos)</span>'; 
}
?>