<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dungeon Maker'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Prepararse para la batalla - una multitud de héroes está a punto de invadir su territorio.</p><p>Construir instalaciones atrapa en su mazmorra, contratar a los monstruos, descubrir reliquias con poder misterioso, y proteger su mazmorra de los héroes que vinieron a acabar contigo.</p><p>Descarga&nbsp;<strong>Dungeon Maker </strong>apk en su ultima version&nbsp;en LOMUCHACHOgames y disfruta del juego</p>";
$info = "<p>Descarga <strong>Dungeon Maker</strong> en LOMUCHACHOgames:</p><ul><li>Más de 260 monstruos y héroes.</li><li>Más de 160 trampas e instalaciones para tu mazmorra</li><li>Más de 240 reliquias con poder misterioso.</li><li>Varios EVENTOS llenos de sorpresas.</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';