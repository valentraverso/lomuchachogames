<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Oddmar'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En Oddmar eres un Vikingo que entro al Valhalla pero no hizo nada épico como para entrara esta tierra de héroes. Ayuda a este señor a ganar su lugar y demostrar su valentía a cambio de un precio que tendra que pagar.</p><p>Los movimientos del protagonista varían enormemente, desde saltar para evitar obstáculos hasta lanzar lanzas o batallas feroces de JEFE. Hay muchos elementos del juego de plataformas de aventura; Por otro lado, también son visibles el ingenioso diseño del nivel de juego y el sentido del humor de la dispersión. Es la diversión del juego.</p><p>Descargar&nbsp;<strong>Oddmar&nbsp;</strong>0.99 apk + obb en LOMUCHACHOgames y&nbsp;dale gloria a este vikingo.</p><p>Lo que trae Oddmar apk + obb full:</p><ul><li>SUMÉRGETE en una épica historia vikinga representada como un cómic animado.</li><li>RECORRE 24 hermosos niveles creados a mano con rompecabezas de física y desafíos de plataformas.</li><li>DESCUBRE tu verdadero poder con armas y escudos con poderes mágicos.</li><li>ENCUENTRA nuevos amigos y enemigos en tu viaje por bosques mágicos, montañas nevadas y peligrosas minas.</li></ul>";
include_once '../templates/game/v1.php';