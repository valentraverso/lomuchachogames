<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Amazon Music Prime'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Gracias a <strong>Amazon Music Prime</strong> podemos tener la musica de todo el mundo a solo un click, y sus beneficios son:</p><ul><li>Incluido con Amazon Prime</li><li>Sin anuncios</li><li>Escucha sin conexión a internet</li><li>Cambia de canción cuantas veces quieras</li><li>Hasta 40 horas de música al mes</li><li>Pon música solo con tu voz</li></ul>";
$mod = "Mod";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';