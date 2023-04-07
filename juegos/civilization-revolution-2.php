<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Civilization Revolution 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Civilization Revolution 2es un juego que reta a los jugadores a crear un imperio que resista el paso del tiempo. Este es el primer juego Civilization.</p><p>Tenes que usar la estrategia para móviles en una nueva presentación 3D y más profundidad táctica que nunca.</p><p>Descarga <strong>Civilization Revolution 2</strong>&nbsp;gratis para Android full apk en LOMUCHACHOgames y crea un glorioso imperio.</p><p>Mas cosas sobre Civilization Revolution 2:</p><ul><li>Nuevas unidades</li><li>Nuevas tecnologías</li><li>Nuevos líderes</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';