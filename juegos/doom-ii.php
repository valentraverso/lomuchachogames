<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'DOOM II'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "8.0 o+";
$texto = "<p>La fantástica secuela del revolucionario DOOM (1993) pone en tus manos la brutal súper escopeta para que luches contra demonios aún más letales, incluido el infame jefe Icono del Pecado. Para salvar la Tierra, debes adentrarte en las profundidades del infierno, sobrevivir a las hordas demoníacas y luchar en las batallas más encarnizadas que se han visto nunca.</p><p>No te dejes vencer tan facil, da todo lo que puedas para llegar hasta el final y vencer a los demonios letales del juegos mas aclamado de todos los tiempos.</p><p>Descarga&nbsp;<strong>DOOM II</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y derrota a los demonios mutantes.</p><p><strong>DOOM II</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Los Master Levels, 20 niveles adicionales creados por la comunidad bajo la supervisión.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';