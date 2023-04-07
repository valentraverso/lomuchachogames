<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
$id = $_POST['id'];
$consult = "SELECT * FROM apps WHERE id = '$id'";
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
    $update = "UPDATE `apps` SET `version` = '$newversion' WHERE `apps`.`id` = '$id'";
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
     $update = "UPDATE `apps` SET `nombre` = '$newnombre' WHERE `apps`.`id` = '$id'";
    $conn->query($update);
    $texto1 = str_replace(" ", "-", $newnombre);
$texto_guion = str_replace(":", "", $texto1);
$str = strtolower($texto_guion);
    $texto2 = str_replace(" ", "-", $nombre);
$texto_guio = str_replace(":", "", $texto1);
$st = strtolower($texto_guio);
    rename($_SERVER['DOCUMENT_ROOT']."/apps/$st.php", $_SERVER['DOCUMENT_ROOT']."/apps/$str.php");
    
}

//Cambia los Links
if ($mediafireapk !== $mdapk){
    $update = "UPDATE `apps` SET `mediafire apk` = '$mediafireapk' WHERE `apps`.`id` = '$id'";
    $conn->query($update);
    
}
if ($megaapk !== $mgapk){
    $update = "UPDATE `apps` SET `mega apk` = '$megaapk' WHERE `apps`.`id` = '$id'";
    $conn->query($update);
}
if($mediafireobb !== $mdobb){
    $update = "UPDATE `apps` SET `mediafire obb` = '$mediafireobb' WHERE `apps`.`id` = '$id'";
    $conn->query($update);
}
if($megaobb !== $mgobb){
    $update = "UPDATE `apps` SET `mega obb` = '$megaobb' WHERE `apps`.`id` = '$id'";
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

     $update = "UPDATE `apps` SET `texto` = '$direccion' WHERE `apps`.`id` = '$id'";
    $conn->query($update);
}
    

//Cambia el tamaño
if (strpos($newtamano, $tamano) !== false) {   
} else {
    $update = "UPDATE `apps` SET `tamano` = '$newtamano' WHERE `apps`.`id` = '$id'";
    $conn->query($update);
    $modify = "UPDATE version SET tamano = '$newtamano' WHERE version.version = '$version' AND nombre = '$get'";
    $conn->query($modify);
}

//Cambia el apto
if($newapto !== $apto){
    $update = "UPDATE `apps` SET `publico` = '$newapto' WHERE `apps`.`id` = '$id'";
    $conn->query($update);
}
header("location:https://lomuchachogames.com/admin/editapp?name=$get");