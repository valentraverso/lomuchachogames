<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dungeon Maker Hack'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.2 o +";
$texto = "<p>Prepararse para la batalla - una multitud de héroes está a punto de invadir su territorio!</p><p>Construir instalaciones atrapa en su mazmorra, contratar a los monstruos, descubrir reliquias con poder misterioso, y proteger su mazmorra de los héroes que vinieron a acabar contigo.</p><p>&nbsp;</p><p>Descarga Dungeon Maker Hack en LOMUCHACHOgames!!</p><ul><li>Más de 260 monstruos y héroes.</li><li>Más de 160 trampas e instalaciones para tu mazmorra</li><li>Más de 240 reliquias con poder misterioso.</li><li>Varios EVENTOS llenos de sorpresas.</li></ul>";
include_once '../templates/game/v1.php';