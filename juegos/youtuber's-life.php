<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Youtuber\'s Life'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Youtubers Life es el juego definitivo donde una genial combinacion de generos te llevara a convertirte en un youtuber, pero eso si emprezaras sin nada ni nadie.&nbsp;</p><p>Todo comienzo con vos en tu casa aburrido y creando video para YouTube lo que sigue lo forjas vos con lo que realices dentro del juego, asi que a darle con todo y mas.</p><p>Asi que si queres ser el mejor youtuber del mundo descargate este genial titulo llamado Youtuber's Life gratis en LOMUCHACHOgames. ¿Que estas esperando para ser famoso?</p>";
include_once '../templates/game/v1.php';