<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

$type = $_GET['type'];
$id = $_GET['id'];
$name = $_GET['name'];

$select = "SELECT * FROM $type WHERE id = '$id'";
$selectC = $conn->query($select);
$s = mysqli_fetch_array($selectC);

$link = str_replace("https://lomuchachogames.com/", "", $s['link']);
$img = str_replace("https://lomuchachogames.com/", "", $s['texto']);


unlink("../../$link");
unlink("../../$img");

$delete = "DELETE FROM $type WHERE id = $id";
$conn->query($delete);

$delet = "DELETE FROM version WHERE nombre = $nombre";
$conn->query($delet);

header("location:https://admin.lomuchachogames.com//android/games?type=$type")
?>