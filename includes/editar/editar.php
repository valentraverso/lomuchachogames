<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
$id = $_POST['id'];
$consult = "SELECT * FROM juegos WHERE id = '$id'";
$dato = mysqli_query($conn, $consult);
$fil = mysqli_fetch_array($dato);

//DATOS BD
$get = $fil['nombre'];
$version = $fil['version'];
$tamano = $fil['tamano'];
$mdapk = $fil['mediafire apk'];
$mgapk = $fil['mega apk'];
$mdobb = $fil['mediafire obb'];
$mgobb = $fil['mega obb'];
$apto = $fil['publico'];
$nombre = $fil['nombre'];
$imagen = $fil['texto']; 

//DATOS FORMULARIO
$newversion = $_POST['version'];
$newtamano = $_POST['tamano'];
$mediafireapk = $_POST['mediafireapk'];
$megaapk = $_POST['megaapk'];
$mediafireobb = $_POST['mediafireobb'];
$megaobb = $_POST['megaobb'];
$newapto = $_POST['apto'];
$img = $_FILES['img']['name'];
$tipe = $_FILES['img']['type'];
$cd = $_FILES['img']['tmp_name'];
$newnombre = $_POST['nombre'];

//Cambia la version
if (strpos($newversion, $version) !== false) {
    
} else {
    $update = "UPDATE `juegos` SET `version` = '$newversion' WHERE `juegos`.`id` = '$id'";
    $conn->query($update);
    $tomar = "SELECT * FROM version WHERE nombre = '$get' ORDER BY version.id DESC";
    $x = $conn->query($tomar);
    $r = mysqli_fetch_array($x);
    $ultimo = $r['n'];
    $meter = "INSERT INTO `version` (`id`, `nombre`, `version`, `n`, `tamano`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`) VALUES (NULL, '$get', '$newversion', '$ultimo'+1, '$newtamano', '$mediafireapk', '$megaapk', '$mediafireobb', '$megaobb')";
    $conn->query($meter);
}

if (strpos($newnombre, $nombre) !== false) {
    
} else {
     $update = "UPDATE `juegos` SET `nombre` = '$newnombre' WHERE `juegos`.`id` = '$id'";
    $conn->query($update);
    $texto1 = str_replace(" ", "-", $newnombre);
$texto_guion = str_replace(":", "", $texto1);
$str = strtolower($texto_guion);
    $texto2 = str_replace(" ", "-", $nombre);
$texto_guio = str_replace(":", "", $texto1);
$st = strtolower($texto_guio);
    rename("../juegos/$st.php", "../juegos/$str.php");
    
}

//Cambia los Links
if ($mediafireapk !== $mdapk){
    $update = "UPDATE `juegos` SET `mediafire apk` = '$mediafireapk' WHERE `juegos`.`id` = '$id'";
    $conn->query($update);
    
}
if ($megaapk !== $mgapk){
    $update = "UPDATE `juegos` SET `mega apk` = '$megaapk' WHERE `juegos`.`id` = '$id'";
    $conn->query($update);
}
if($mediafireobb !== $mdobb){
    $update = "UPDATE `juegos` SET `mediafire obb` = '$mediafireobb' WHERE `juegos`.`id` = '$id'";
    $conn->query($update);
}
if($megaobb !== $mgobb){
    $update = "UPDATE `juegos` SET `mega obb` = '$megaobb' WHERE `juegos`.`id` = '$id'";
    $conn->query($update);
}

if(!empty($img)){
        unlink('../'.$imagen.'.php');
    
    //Ruta de destino de las imaganes
    $destino = $_SERVER['DOCUMENT_ROOT'] . '/fotos/';
//Movemos del directorio temporal al directorio escogido
    move_uploaded_file($_FILES['img']['tmp_name'], $destino . $img);
// Direccion de nuestra foto
    $direccion = "fotos/" . $img;

     $update = "UPDATE `juegos` SET `texto` = '$direccion' WHERE `juegos`.`id` = '$id'";
    $conn->query($update);
}
    

//Cambia el tamaño
if (strpos($newtamano, $tamano) !== false) {   
} else {
    $update = "UPDATE `juegos` SET `tamano` = '$newtamano' WHERE `juegos`.`id` = '$id'";
    $conn->query($update);
    $modify = "UPDATE version SET tamano = '$newtamano' WHERE version.version = '$version' AND nombre = '$get'";
    $conn->query($modify);
}

//Cambia el apto
if($newapto !== $apto){
    $update = "UPDATE `juegos` SET `publico` = '$newapto' WHERE `juegos`.`id` = '$id'";
    $conn->query($update);
}

//DATOS ENGLISH
include_once $_SERVER['DOCUMENT_ROOT'].'/en/includes/conection.php';

$consult = "SELECT * FROM juegosen WHERE id = '$id'";
$dato = mysqli_query($conn, $consult);
$fil = mysqli_fetch_array($dato);

//DATOS BD
$get = $fil['nombre'];
$version = $fil['version'];
$tamano = $fil['tamano'];
$mdapk = $fil['mediafire apk'];
$mgapk = $fil['mega apk'];
$mdobb = $fil['mediafire obb'];
$mgobb = $fil['mega obb'];
$apto = $fil['publico'];
$nombre = $fil['nombre'];
$imagen = $fil['texto']; 

if (strpos($newversion, $version) !== false) {
    
} else {
    $updatea = "UPDATE `juegosen` SET `version` = '$newversion' WHERE `juegosen`.`id` = '$id'";
    $conn->query($updatea);
    $tomara = "SELECT * FROM version WHERE nombre = '$get' ORDER BY version.id DESC";
    $xa = $conn->query($tomara);
    $ra = mysqli_fetch_array($xa);
    $ultimoa = $r['n'];
    $meter = "INSERT INTO `version` (`id`, `nombre`, `version`, `n`, `tamano`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`) VALUES (NULL, '$get', '$newversion', '$ultimoa'+1, '$newtamano', '$mediafireapk', '$megaapk', '$mediafireobb', '$megaobb')";
    $conn->query($meter);
}

if (strpos($newnombre, $nombre) !== false) {
    
} else {
     $update = "UPDATE `juegosen` SET `nombre` = '$newnombre' WHERE `juegosen`.`id` = '$id'";
    $conn->query($update);
    $texto1 = str_replace(" ", "-", $newnombre);
$texto_guion = str_replace(":", "", $texto1);
$str = strtolower($texto_guion);
    $texto2 = str_replace(" ", "-", $nombre);
$texto_guio = str_replace(":", "", $texto1);
$st = strtolower($texto_guio);
    rename("../juegos/$st.php", "../juegos/$str.php");
    
}

//Cambia los Links
if ($mediafireapk !== $mdapk){
    $update = "UPDATE `juegosen` SET `mediafire apk` = '$mediafireapk' WHERE `juegosen`.`id` = '$id'";
    $conn->query($update);
    
}
if ($megaapk !== $mgapk){
    $update = "UPDATE `juegosen` SET `mega apk` = '$megaapk' WHERE `juegosen`.`id` = '$id'";
    $conn->query($update);
}
if (!empty($mediafireobb)) {
    if($mediafireobb !== $mdobb){
    $update = "UPDATE `juegosen` SET `mediafire obb` = '$mediafireobb' WHERE `juegosen`.`id` = '$id'";
    $conn->query($update);
}
}
if (!empty($megaobb)) {
    if($megaobb !== $mgobb){
    $update = "UPDATE `juegosen` SET `mega obb` = '$megaobb' WHERE `juegosen`.`id` = '$id'";
    $conn->query($update);
}
}

if(!empty($img)){

    $update = "UPDATE `juegosen` SET `texto` = 'http://lomuchachogames.com/$direccion' WHERE `juegosen`.`id` = '$id'";
    $conn->query($update);
}
    

//Cambia el tamaño
if (strpos($newtamano, $tamano) !== false) {   
} else {
    $update = "UPDATE `juegosen` SET `tamano` = '$newtamano' WHERE `juegosen`.`id` = '$id'";
    $conn->query($update);
    $modify = "UPDATE version SET tamano = '$newtamano' WHERE version.version = '$version' AND nombre = '$get'";
    $conn->query($modify);
}

//Cambia el tamaño
if (strpos($newapto, $apto) !== false) {   
} else {
    $update = "UPDATE `juegosen` SET `publico` = '$newapto' WHERE `juegosen`.`id` = '$id'";
    $conn->query($update);
}

$bajo = strtolower($nombre);
$sinespacio = str_replace('-', ' ', $bajo);
header("location:https://lomuchachogames.com/admin/edit?name=$sinespacio");

mysqli_free_result($dato);

?>