<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Metal Squad: Shooting Game HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Escuadra metal es un juego de acción disparos. Este juego te llevará a través de la serie de niveles clásicos, varios enemigos y batallas del jefe con la maravillosa experiencia de juegos de plataformas de desplazamiento lateral. Varias armas llenan de slug y power ups a luchar su manera a través de múltiples enemigos, tanques metálicos, helicópteros y acabar con el mal uso del líder del ejército y su mundo de terror.</p><p>Descarga <strong>Metal Squad: Shooting Game HACK&nbsp;</strong>apk en LOMUCHACHOgames y aniquila lo mejor posible.</p><p>Lo que trae Metal Squad: Shooting Game HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';