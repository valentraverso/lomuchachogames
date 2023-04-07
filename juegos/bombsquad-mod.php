<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'BombSquad MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Revienta a tus amigos (o a la computadora) en un torneo de mini-juegos explosivos como Captura la bandera, Hockey-bomba, y Combate mortal épico en cámara lenta.</p><p>Controles sencillos y un amplio apoyo de controles hacen que sea fácil que 8 personas entren en la acción, incluso puedes usar tus dispositivos móviles como controles a través de la aplicación gratuita BombSquad Remote.</p><p>Descarga&nbsp;<strong>BombSquad MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y bombardea intermitente.</p>";
$info = "<p><strong>BombSquad MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';