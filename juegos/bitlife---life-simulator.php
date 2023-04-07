<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'BitLife - Life Simulator'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>En Bitlife - Life Simulator tenes dos opciones,&nbsp; tomar todas las decisiones correctas y que la sociedad toma como moralmente aceptables para convertirte en un ciudadano modelo, casarte y luego morir.&nbsp;O elegirás el camino malo, donde bajaras a la zona delictiva de las sociedas. Vender droiga, armar conflictos, engañar a tus seres queridos.</p><p>Este es un juego de decir mediante opciones que te va dando la historia, este es el primer simulador de texto para Android.</p><p>Descargar&nbsp;<strong>BitLife - Life Simulator&nbsp;</strong>APK 1.3 en LOMUCHACHOgames y conta tu historia de la forma que quieras.</p><p>Lo que trae Bitlife full apk para Android:</p><ul><li>No trae publicidades.</li></ul>";
include_once '../templates/game/v1.php';