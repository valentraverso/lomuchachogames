<?php

include_once 'conection.php';

/* Variables */
$nombre = $_POST['nombre'];
$text = $_POST['texto'];
$align = $_POST['align'];
$img  = $_POST['imagen'];
$posicion = $_POST['posicion'];
$link = $_POST['link'];

$all = "$nombre, $text, $align, $img, $posicion;, $link";
$all = str_replace("'", "\'", $all);

$por = "UPDATE pendiente SET nombre = '$all' WHERE tipo = 'banner'";
$conn->query($por);

header('location:https://lomuchachogames.com/admin/banner');