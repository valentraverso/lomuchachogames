<?php
//Conexion PDO
$usuario="";
$password="";
$connection = "";
$pdo = new PDO($connection, $usuario, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Variables
$stars = $_POST['stars'];
$tipo = $_POST['tipo'];
$gameid = $_POST['idgame'];
$_SERVER['HTTP_CLIENT_IP'];
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
$ip = $_SERVER['REMOTE_ADDR'];
 
$insert = $pdo->prepare("SELECT * FROM rating WHERE ip = :ip AND gameid = :gameid AND tipo = :tipo");
$insert->bindParam(':ip', $ip);
$insert->bindParam(':gameid' , $gameid);
$insert->bindParam(':tipo' , $tipo);
$insert->execute();
if($insert->rowCount() == 0){
    $caca=$pdo->prepare("INSERT INTO rating (id, ip, stars, gameid, tipo) VALUES (NULL, :ip, :stars, :gameid, :tipo)");
    $caca->bindParam(':ip', $ip);
    $caca->bindParam(':stars', $stars);
    $caca->bindParam(':gameid', $gameid);
    $caca->bindParam(':tipo', $tipo);
    $caca->execute();
    
    if($tipo = 'app'){
        $s = "apps";
    }else{
        $s = "juegos";
    }
    
include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

    /* Cantidad de votos */
$ratepromedy = "SELECT * FROM rating WHERE gameid = '$gameid' AND tipo='$tipo'";
$ratetiu = $conn->query($ratepromedy);
$ratiq = mysqli_num_rows($ratetiu);

/* Suma de votos */
$ratesum = "SELECT SUM(stars) as stars FROM rating WHERE gameid = '$gameid' AND tipo='$tipo'";
$ratesumu = $conn->query($ratesum);
$rowdi = mysqli_fetch_array($ratesumu);
$rowdmy = $rowdi['stars'];
/* Promedio estrellas */
$promedy = round($rowdmy/$ratiq, 1, PHP_ROUND_HALF_UP);

    
    $ne = $pdo->prepare("UPDATE juegos SET stars = :promedy WHERE id = :id");
    $ne->bindParam(':promedy', $promedy);
    $ne->bindParam(':id', $gameid);
    $ne->execute();
}