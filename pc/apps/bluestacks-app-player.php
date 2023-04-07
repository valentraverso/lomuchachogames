<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/includes/conection.php";

$selectG = "SELECT * FROM apps WHERE id = '57'";
$selectGConn = $conn->query($selectG);
$fetchG = mysqli_fetch_array($selectGConn);

include_once $_SERVER['DOCUMENT_ROOT']."/templates/post/game.php";
?>