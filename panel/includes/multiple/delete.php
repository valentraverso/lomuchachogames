<?php

$device = $_GET['device'];
$table = $_GET['table'];
$id = $_GET['id'];
$redirect = $_GET['link'];

switch($device){
    case "pc":
        include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection-pc.php';
        break;
}

$delete = "DELETE FROM $table WHERE id = '$id'";
$conn->query($delete);

header("location:$redirect");