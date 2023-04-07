<?php
include 'conection.php';

$insert = "UPDATE userLinks SET views = views+1 WHERE id = '$idPost'";
$conn->query($insert);

?>