<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Factory Inc.'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>En este  divertido juego para Android, llamado Factory Inc., te vas a convertir en el jefe de una fabrica. Tendrás que demoler  y construir objetos que luego venderás para hacer crecer tu planta.</p>

<p>Emplea un gerente para que automatice la fabrica y te ayude a llevar todo adelante, mejor maquinas y adquiere mayor personal. Expande tu negocio y mueve grandes cantidades de dinero.</p>

<p>Descargar <strong>Factory Inc. </strong>apk para Android gratis en LOMUCHACHOgames y empeza la fabrica de tus sueños en este juego tycoon.</p>";
include_once '../templates/game/v1.php';