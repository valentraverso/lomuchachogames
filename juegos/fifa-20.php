<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'FIFA 20'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>El<strong> </strong>FIFA 20 ya está disponible para descargar y puedes obtenerlo gratis. Personas de todo el mundo esperan la última versión de este juego de fútbol. Quieren usar todas las funciones más recientes para mejorar su rendimiento y disfrutar del juego.</p><p>La última versión de este juego está disponible con muchas atracciones nuevas. Ofrecerá nuevos kits, estadios, jugadores, modo torneo, vista de cámara similar a PS4 y modo administrador para un juego emocionante. Este juego está disponible con muchas características increíbles, que te obligarán a jugarlo más en tu dispositivo móvil.</p><p>Descarga&nbsp;<strong>FIFA&nbsp;20</strong> apk + data + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y disfruta del deporte rey.</p>";
$info = "<p><strong>FIFA&nbsp;20</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Actualizacion 2020</li><li>Packs 2020</li><li>Jugabilidad 2020</li></ul>";
$versiondispositivo = "6.0 o +";
$mod = "";
include_once '../templates/game/v1.php';