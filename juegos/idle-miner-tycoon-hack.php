<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Idle Miner Tycoon HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Conviértete en un magnate industrial y administra tu mina y ganancias inactivas. Haz crecer tu imperio y dale fuerza a tu economía con administradores especializados que automatizarán el flujo de trabajo de tu mina. Hazle frente a este desafío y descubre las estrategias de minería más efectivas y gana tanto dinero como puedas.</p><p>Transfórmate en el magnate de la minería más grande que haya existido jamás.</p><p>Descarga <strong>Idle Miner Tycoon HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y ganale a la mineria.</p><p><strong>Idle Miner Tycoon HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero MOD</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';