<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Construction Simulator 2 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>En <strong>Construction Simulator 2 HACK</strong>, crearás tu propia empresa de construcción y te pondrás al volante de 40+ máquinas de construcción reales de Caterpillar, Liebherr, Palfinger, Bell, STILL, ATLAS, Mack Trucks, Meiller Kipper y Kenworth.</p><p>Este juego te lleva a Estados Unidos, donde te esperan muchos trabajos de construcción de edificios y calzadas con la maquinaria más adecuada para ello.</p><p>Descarga&nbsp;<strong>Construction Simulator 2 HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y se feliz construyendo lo que mas te guste.</p><p><strong>Construction Simulator 2 HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MÁS DE 60 TRABAJOS DE CONSTRUCCIÓN</li><li>UNA AMPLIA FLOTA EN CONSTRUCTION SIMULATOR</li><li>TU PROPIA EMPRESA DE CONSTRUCCIÓN</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';