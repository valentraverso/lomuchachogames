<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'NBA 2K19 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>En NBA vas a poder jugar al basquetball con tu equipo favorito, ya se Lakers, Chicago o cualquier otro. Siente como es estar mano a mano con los mejores y ademas los mejores graficos hasta el momento para un juego sobre este deporte. Ademas tienes la opcion de comprar y vender jugadores a tu gusto en el mondo Carrera.</p>

<p>Este juego para Android fue lanzado 2K es conmemorando el estreno del 2k hace hace 20 años.</p>

<p>Descarga <strong>NBA 2K19 HACK </strong>para Android gratis con su obb + apk en LOMUCHACHOgames y divertite jugando al basket en tu dispositivo movil.</p>";
include_once '../templates/game/v1.php';