<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'GTA III MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Bienvenido a GTA 3. El enorme y variado mundo abierto que ofrece el juego, así como un reparto de personajes disparatados de todos los estratos sociales y la libertad para explorarlo todo, ponen el intrigante y cruel mundo del crimen al alcance de tu mano.</p><p>Grand Theft Auto III, con unas voces estelares, una trama llena de humor negro, una banda sonora apabullante y un revolucionario mundo abierto, definió el género de los juegos con mapas abiertos para una generación.</p><p>Descargar <strong>GTA III MOD</strong> APK + OBB gratis para Android en LOMUCHACHOgames y entra al mundo de la mafia.</p>";
$info = "<p>Las caracteristicas de <strong>Grand Theft Auto 3 MOD</strong> para Android son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "7.0 o +";
$mod = "";
include_once '../templates/game/v1.php';