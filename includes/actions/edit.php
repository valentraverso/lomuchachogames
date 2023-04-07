<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

$id = $_POST['id'];
$type = $_POST['type'];

//Conection to table
$select = "SELECT * FROM $type WHERE id = '$id'";
$selectC = $conn->query($select);
$s = mysqli_fetch_array($selectC);

//Form new Variables
$title = $_POST['title'];
$description = $_POST['texto'];
$apk1 = $_POST['apk1']; 
$apk2 = $_POST['apk2'];
$obb1 = $_POST['obb1'];
$obb2 = $_POST['obb2'];
$developer = $_POST['developer'];
$publico = $_POST['age'];
$versionAndroid = $_POST['androidVersion'];
$size = $_POST['size'];
$version = $_POST['version'];
$relatedWords = $_POST['relatedWords'];

//Mysql Variables
$SQLtitle = $s['nombre'];
$SQLdescription = $s['description'];
$SQLapk1 = $s['mediafire apk'];
$SQLapk2 = $s['mega apk'];
$SQLobb1 = $s['mediafire obb'];
$SQLobb2 = $s['mega obb'];
$SQLdeveloper = $s['creador'];
$SQLpublico = $s['publico'];
$SQLandroidversion = $s['versionAndroid'];
$SQLsize = $s['tamano'];
$SQLversion = $s['version'];
$SQLimg = $s['texto'];
$SQLrelatedWords = $s['relatedWords'];

//Edit Title
if($title != $SQLtitle){
$titleOptimize = str_replace('"', '\"', $title);
$titleOptimize = str_replace("'", "\'", $titleOptimize);

$insertTitle = "UPDATE $type SET nombre = '$titleOptimize' WHERE id = '$id'";
$conn->query($insertTitle);
}

//Edit Description
if($description != $SQLdescription){
$descriptionOptimize = str_replace('"', '\"', $description);
$descriptionOptimize = str_replace("'", "\'", $descriptionOptimize);

$insertDescription = "UPDATE $type SET description = '$descriptionOptimize' WHERE id = '$id'";
$conn->query($insertDescription);
}

//Edit mediafire APK
if($apk1 != $SQLapk1){
    $insertApk1 = "UPDATE $type SET `mediafire apk` = '$apk1' WHERE id = '$id'";
    $conn->query($insertApk1);
}

//Edit Mega APK
if($apk2 != $SQLapk2){
    $insertApk2 = "UPDATE $type SET `mega apk` = '$apk2' WHERE id = '$id'";
    $conn->query($insertApk2);
}

//Edit Mediafire OBB
if($obb1 != $SQLobb1){
    $insertObb1 = "UPDATE $type SET `mediafire obb` = '$obb1' WHERE id = '$id'";
    $conn->query($insertObb1);
}

if($obb2 != $SQLobb2){
    $insertObb2 = "UPDATE $type SET `mega obb` = '$obb2' WHERE id = '$id'";
    $conn->query($insertObb2);   
}

//Edit developer
if($developer != $SQLdeveloper){
    $developerOptimize = str_replace('"', '\"', $developer);
    $developerOptimize = str_replace("'", "\'", $developerOptimize); 
    
    $insertDeveloper = "UPDATE $type SET creador = '$developerOptimize' WHERE id = '$id'";
    $conn->query($insertDeveloper);
}

//Edit public
if($publico != $SQLpublico){
    $insertPublico = "UPDATE $type SET publico = '$publico' WHERE id = '$id'";
    $conn->query($insertPublico);
}

//Edit Android Version
if($versionAndroid != $SQLandroidversion){
    $insertAndroid = "UPDATE $type SET versionAndroid = '$versionAndroid' WHERE id = '$id'";
    $conn->query($insertAndroid);
}

//Edit size
if($size != $SQLsize){
    $insertSize = "UPDATE $type SET tamano = '$size' WHERE id = '$id'";
    $conn->query($insertSize);
}

//Edit related words
if($relatedWords != $SQLrelatedWords){
    $insertRelated = "UPDATE $type SET relatedWords = '$relatedWords' WHERE id = '$id'";
    $conn->query($insertRelated);
}

//Change version
if($version != $SQLversion){
    $update = "UPDATE $type SET `version` = '$version' WHERE id = '$id'";
    $conn->query($update);
    $tomar = "SELECT * FROM version WHERE nombre = '$SQLtitle' ORDER BY id DESC";
    $x = $conn->query($tomar);
    $r = mysqli_fetch_array($x);
    $ultimo = $r['n'];
    $meter = "INSERT INTO `version` (`id`, `nombre`, `version`, `n`, `tamano`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`) VALUES (NULL, '$SQLtitle', '$version', '$ultimo'+1, '$size', '$apk1', '$apk2', '$obb1', '$obb2')";
    $conn->query($meter);
}

if($_FILES['poster']['name'] != null){
    $SQLimgNew = str_replace("https://lomuchachogames.com/", "../../", $SQLimg);
    unlink($SQLimgNew);
    
    //Upload Image
    $img = $_FILES['poster']['name'];
    $tipe = $_FILES['poster']['type'];
    $cd = $_FILES['poster']['tmp_name'];
//Ruta de destino de las imaganes
    $destino = '../../fotos/';
//Movemos del directorio temporal al directorio escogido
    move_uploaded_file($_FILES['poster']['tmp_name'], $destino . $img);
// Direccion de nuestra foto
    $poster = "https://lomuchachogames.com/fotos/" . $img;
    
    $insertImg = "UPDATE $type SET texto = '$poster' WHERE id = '$id'";
    $conn->query($insertImg);
}

header("location:https://admin.lomuchachogames.com/android/edit?id=$id&type=$type&success=1");