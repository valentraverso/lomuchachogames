<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Mi historia de éxito juego de negocios HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Alcanza todos tus objetivos por tus propios medios: consigue tu primer trabajo, alquila un apartamento y comienza a ascender en la pirámide laboral. Ahorra dinero para fundar tu propio negocio.</p><p>Conviértete en un exitoso empresario, gana millones de dólares y dirige tu propia empresa en \"Mi historia de éxito juego de negocios\".</p><p>Descarga&nbsp;<strong>Mi historia de éxito juego de negocios HACK</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y se el mas rico del planeta.</p><p><strong>Mi historia de éxito juego de negocios HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Encuentra un trabajo para alquilar tu primer apartamento.</li><li>Acaba tus estudios en la universidad para llegar más alto.</li><li>Cásate y forma una familia para mejorar tu posición en la sociedad.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';