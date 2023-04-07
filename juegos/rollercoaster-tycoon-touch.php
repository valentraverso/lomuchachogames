<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'RollerCoaster Tycoon Touch'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>RollerCoaster Tycoon Touch es un juego para Android de crear parques, donde la atracción principal son las montañas rusas.</p><p>El innovador constructor de montañas rusas con control táctil te permite dibujar montañas rusas locas y únicas sin esfuerzo. Personaliza tu parque, expresa tu creatividad, elige tu diseño, personaliza los colores de todas tus atracciones y toma fotos para compartirlas con tus amigos.</p><p>Descargar&nbsp;<strong>RollerCoaster Tycoon Touch&nbsp;</strong>2.0.8 apk en LOMUCHACHOgames y crea el mejor parque tematico del mundo.</p><p>Lo que trae RollerCoaster Tycoon para Android:</p><ul><li>Personaliza tu parque de ensueño y deleita a los visitantes.</li><li>Editor de montañas rusas.</li><li>Utiliza el poderoso editor del parque para rediseñar tu parque a tu antojo.</li><li>Obten cartas y potencia tu creacion.</li></ul>";
include_once '../templates/game/v1.php';