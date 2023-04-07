<?php
include_once '../includes/conection.php';
include_once '../includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Voloco Premium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Voloco es una aplicación de procesamiento de voz en tiempo real que combina afinación automática, armonía y codificación de voz.&nbsp;</p><p>Elija una canción de su colección de música o de la biblioteca de ritmos gratuita de Voloco para cantar o rapear, y Voloco adivinará la nota de la pista y afinará su voz con esa nota.</p><p>Descarga&nbsp;<strong>Voloco Premium</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y modifica tu voz.</p><p><strong>Voloco Premium</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Funciones Premium</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';