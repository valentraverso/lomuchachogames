<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Swift Installer'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "8.0 o+";
$texto = "<p>Swift Installer empaqueta lo mejor con los temas de Swift Substratum, y viene con su propio instalador y motor de color! Ahora puedes instalar Swift Themes y modificar todo al respecto.&nbsp;</p><p>Las opciones de color son casi infinitas, ya que puede ingresar su propio código hexadecimal de color favorito para fondos oscuros y acentos. Alrededor de 200 aplicaciones están actualmente temáticas.</p><p>Descarga&nbsp;<strong>Swift Installer</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y modifica todo lo que mas prefieras.</p><p><strong>Swift Installer</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Se incluyen temas.</li><li>El motor de color se incluye con infinitas opciones de color oscuro.</li><li>Un sistema de actualización fácil de usar. No es necesario volver a instalar todas las superposiciones para cada actualización.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';