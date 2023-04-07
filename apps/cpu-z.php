<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'CPU-Z'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>CPU-Z es un software freeware, disponible Windows y Android​; brindándonos información detallada del procesador, chipset de sistema y el chipset de video entre otros que está instalado en la Computadora Personal.&nbsp;</p><p>El programa contiene seis fichas que nos informan.</p><p>Descarga <strong>CPU-Z</strong>&nbsp;gratis apk para Android en LOMUCHACHOgames y estate informado.</p><ul><li>Información del sistema: marca y modelo de dispositivo, la resolución de pantalla, la memoria RAM, almacenamiento.<br>&nbsp;</li><li>Información sobre la batería: nivel, la situación, la temperatura, la capacidad.<br>&nbsp;</li><li>Sensores.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';