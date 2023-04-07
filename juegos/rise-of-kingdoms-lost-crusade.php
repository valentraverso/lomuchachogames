<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Rise of Kingdoms Lost Crusade'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Desde las profundidades de la oscuridad hasta el pico de las leyendas, tu será el autor de la historia de tu civilización.</p><p>Las batallas no son pre-calculadas sino que ocurren en tiempo real en el mapa. Cualquiera puede unirse o abandonar una batalla en cualquier momento, lo que permite juego real en RTS. Manda tropas para ayudar a tu amigo, o lanza un contraataque sorpresa a la ciudad del atacante.</p><p>Descarga&nbsp;<strong>Rise of Kingdoms: Lost Crusade</strong>&nbsp;apk + datos obb en su ultima version para Android&nbsp;en LOMUCHACHOgames y batalla como un buen soldado.</p>";
$info = "<p><strong>Rise of Kingdoms: Lost Crusade</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Batallas en Tiempo Real</li><li>Mapa Contínuo de Mundo</li><li>Ocho Civilizaciones Únicas</li><li>Sistema de Alianza</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';