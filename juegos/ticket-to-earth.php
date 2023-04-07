<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Ticket To Earth'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "6.0 o +";
$texto = "<p>La historia de Ticket To Earth se situa en un planeta lejano. Nos meteremos en un enorme rompecabezas que hay decifrar, el auge de la minería ha dejado a New Providence para morir y solo queda una nave con destino a la Tierra.</p>

<p>La cuadrícula de rompecabezas es tu campo de batalla a medida que posicionas a tu equipo, recolectas fichas combinadas y enciendes habilidades especiales devastadoras. ¡Nunca has jugado nada como esto!</p>

<p>Descargar <strong>Ticket To Earth </strong>APK + OBB ultima version gratis para Android.</p><p>Ticket to Earth combina a la perfección las tácticas basadas en turnos, los acertijos que provocan la reflexión y la atractiva narración de RPG en un paquete entretenido. Ademas contiene las siguientes caracteristicas:</p>
<ul>
 	<li>TÁCTICAS DE BATALLA</li>
 	<li>ROMPECABEZAS QUE ENCUENTRAN EL ENSAYO</li>
</ul>";
include_once '../templates/game/v1.php';