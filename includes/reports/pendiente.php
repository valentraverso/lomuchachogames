<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

$nombre = $_POST['name'];
$tipo =  $_POST['tipo'];
$id = $_GET['act'];

/* Subidor */
if($_GET['auth'] == "upload"){
$insert = "INSERT INTO pendiente (id, nombre, tipo) VALUES (NULL, '$nombre', '$tipo')";
$conn->query($insert);
header('location:https://admin.lomuchachogames.com/android/?success=1');
}else if($_GET['auth'] == "delete"){
    $delete = "DELETE FROM pendiente WHERE id = '$id'";
    $conn->query($delete);
    header('location:https://admin.lomuchachogames.com/android/?success=2');
}