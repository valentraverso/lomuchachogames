<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/includes/conection.php";

$selectG = "SELECT * FROM juegos WHERE id = '66'";
$selectGConn = $conn->query($selectG);
$fetchG = mysqli_fetch_array($selectGConn);

include_once $_SERVER['DOCUMENT_ROOT']."/templates/post/game.php";
?>