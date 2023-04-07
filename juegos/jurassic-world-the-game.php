<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Jurassic World: The Game'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Regresa a Isla Nublar con los creadores del exitoso Jurassic Park Builder para tu próxima aventura. Construye el parque temático del mañana en esta experiencia de creación y lucha de dinosaurios sin igual.</p>

<p>Para construir un equipo de campo de batalla ganador tendrás que diseñar el parque más eficiente y efectivo, que permita a tus dinosaurios prosperar y evolucionar. Descubre nuevas y sorprendentes especies de dinosaurios adquiriendo paquetes de cartas repletos de sorpresas.</p>

<p>Descargar<strong> Jurassic Worl: The Game </strong>para Android apk GRATIS en LOMUCHACHOgames y crea tu parque de dinosaurios.</p>";
include_once '../templates/game/v1.php';