<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Rodeo Stampede: Sky Zoo Safari HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Ensilla tu caballo y prepárate para cabalgar sobre los animales más salvajes de este lado de la Sabana. Esta estrella del rodeo deberá enfrentar a leones, tigres y osos por igual. Armado con un lazo y un sombrero de vaquero, balancéate sobre búfalos, elefantes, avestruces y otros animales en medio de una estampida.</p><p>Sujétate mientras cabalgas sobre estas fieras que dan brincos y saltos y quizás te ganes sus corazones. Cuando la estampida termina, ¡comienza el zoológico! Llena todos los cercados con tus amigos de cuatro patas y permíteles a tus clientes que se maravillen con lo que ven. No querrás perderte esta cabalgata salvaje.</p><p>Descarga <strong>Rodeo Stampede: Sky Zoo Safari HACK&nbsp;</strong>apk en LOMUCHACHOgames y se el mejor en buscar animales para tu ZOO.</p><p>Lo que trae Rodeo Stampede: Sky Zoo Safari full apk:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';