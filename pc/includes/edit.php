<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

// Basic Info
$type = $_GET['type'];
$id = $_GET['id'];

// Actual Variables
$title = $_POST['title'];
$developer = $_POST['developer'];
$tags = $_POST['tags'];
$size = $_POST['size'];
$downloadLink = $_POST['downloadLink'];
$text = $_POST['texto'];

// Database Conection
$con = "SELECT * FROM $type WHERE id = $id";
$conC = $conn->query($con);
$c = mysqli_fetch_array($conC);

// SQL Variables
$sqlTitle = $c['title'];
$sqlDeveloper = $c['developer'];
$sqlTags = $c['tags'];
$sqlSize = $c['size'];
$sqlDownload = $c['dowload'];
$sqlText = $c['description'];

//Verifications
if($title != $sqlTitle){
    $update = "UPDATE $type SET title = '$title' WHERE id = '$id'";
    $conn->query($update);
}

if($developer != $sqlDeveloper){
    $update = "UPDATE $type SET developer = '$developer' WHERE id = '$id'";
    $conn->query($update);
}

if($tags != $sqlTags){
    $update = "UPDATE $type SET tags = '$tags' WHERE id = '$id'";
    $conn->query($update);
}

if($size != $sqlSize){
    $update = "UPDATE $type SET size = '$size' WHERE id = '$id'";
    $conn->query($update);
}

if($downloadLink != $sqlDownload){
    $update = "UPDATE $type SET dowload = '$downloadLink' WHERE id = '$id'";
    $conn->query($update);
}

if($text != $sqlText){
    $update = "UPDATE $type SET description = '$text' WHERE id = '$id'";
    $conn->query($update);
}

header('location:https://admin.lomuchachogames.com/pc/edit?id='.$id.'&type='.$type); 