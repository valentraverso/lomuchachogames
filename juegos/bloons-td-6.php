<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bloons TD 6'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>Si ya te habías aburrido de matar globos con monos, ahora Ninjakiwi te trae la sexta entrega de Bloons TD 6 para Android. Prepárate para defender tu base de los globos que vendran en contra tuya. ¡¡Crea y mejora monos, con sus naves, aviones y barcos!! No hay nada mas divertido que Bloons, te esperan horas y horas de diversion.</p><p>Los bloons volvieron y están mejor que nunca. Prepárate para un gran juego de defensa de torres en 3D que te dará horas y horas de las mejores partidas estratégicas.</p><p>Descarga&nbsp;<strong>Bloons TD 6 </strong>apk + dato OBB gratis para Android&nbsp;de LOMUCHACHOgames y juga feliz!!</p><p>¿Queres saber mas sobre el APK y OBB de Bloons TD 6? Acá tenes mas información:</p><ul><li>BLOONS TD NUEVO EN 3D</li><li>MEJORAS DE TORRES MONERILES ÉPICAS</li><li>SISTEMA DE CONOCIMIENTO MONERIL PROFUNDO</li></ul>";
include_once '../templates/game/v1.php';