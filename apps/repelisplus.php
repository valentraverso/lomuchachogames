<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'RepelisPlus'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Si queres ver peliculas y series gratis en tu dispositivo Android LOMUCHACHOgames te recomienda RepelisPlus, para ver tus series favoritas como Breaking Bad, The 100 o Lost. También podes ver los estrenos del cine, solo con tu celular y esta grandiosa aplicacion.</p>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';