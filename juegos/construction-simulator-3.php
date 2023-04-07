<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Construction Simulator 3'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>Bienvenido a Construction Simulator 3 el mejor juego de construccion para Android.&nbsp;Completa exigentes contratos, construye y repara carreteras y casas; expande tu flota de vehículos y modela la ciudad a tu gusto; descubre un mapa totalmente nuevo, desbloquea contratos y consigue vehículos mientras tu empresa crece.</p><p>Explore nuevos mapas, expanda flotas de ingeniería, desarrolle rápidamente su empresa de construcción, desbloquee nuevos contratos de ingeniería y construya y repare carreteras y casas.</p><p>Descarga&nbsp;<strong>Construction Simulator 3&nbsp;</strong>APK + OBB 1.0 gratis para Android en LOMUCHACHOgames.</p><p>Lo que trae Construction Simulator 3 1.0 GRATIS:</p><ul><li>Millones de maquina para la construccion.</li><li>Muchisimos contratos para realizar.</li><li>Vista desde la cabina para mas realismo</li></ul>";
include_once '../templates/game/v1.php';