<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Catana Comics Stickers'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Ahora usted también puede enviar estas pegatinas oficiales de Catana Comics a su pareja mientras están sentadas a su lado con este paquete de más de 50 pegatinas de Catana Comics.</p><p>Los adhesivos se pueden compartir en su aplicación de mensajería favorita utilizando la aplicación independiente o puede enviar los adhesivos directamente desde GBoard (el teclado oficial de Google).</p><p>Descarga <strong>Catana Comics Stickers&nbsp;</strong>ultima version para Android en LOMUCHACHOgames y diviertete con estos stickers.</p>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';