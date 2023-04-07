<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Sandbox Evolution HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Utiliza tus poderes celestiales para crear un universo de píxel o para destruirlo! Bienvenidos a The Sandbox Evolution, el juego de creación de mundos de pixel art número 1. Juega con la física, más de 170 elementos y héroes controlables. Crea tus propios juegos y niveles y comparte tus creaciones online. Tu creatividad e imaginación no tienen límites.</p><p>Construye un mundo de píxel en 2D mezclando más de 170 elementos para descubrir cómo interactúan. Utiliza plantillas predefinidas o empieza desde cero: música, pixel art, Sandbox, Caveman o Avatar. Manipula elementos naturales.</p><p>Descarga&nbsp;<strong>The Sandbox Evolution HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y recorre un nuevo planeta</p><p><strong>The Sandbox Evolution HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>CREA TU MUNDO PÍXEL A PÍXEL</li><li>EL CREADOR DE JUEGOS QUE QUERÍAS</li><li>CREA VIDA Y CONSTRUYE TU PROPIO MUNDO</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';