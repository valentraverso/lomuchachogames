<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Ganster Vegas'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Gangster Vegas te llevara a una vida criminal que nunca antes habías imaginado, disfruta de todo lo que ofrece Las Vegas, desde disparar a pandillas rivales y robar coches hasta participar en carreras y probar suerte en el casino.</p>
<p>Ábrete camino por las casi 80 misiones que ofrece Gangster Vegas para Android, accion carreras, disparos y mucho mas en este genial juego de mundo libre.</p>
<p>Descagar <strong>Gangster Vegas</strong> APK + OBB para Android en LOMUCHACHOgames y metete en el de los mafiosos.</p>";
include_once '../templates/game/v1.php';