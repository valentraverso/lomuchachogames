<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO Batman: DC Super Heroes'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Los personajes unen fuerzas con otros famosos superhéroes de DC para evitar que los villanos Lex Luthor y The Joker destruyan Gotham City.</p>

<p>Domina las habilidades de los trajes mientras lucha contra el crimen.</p>

<p>Descarga <strong>LEGO Batman: DC Super Heroes </strong>para Android gratis y salva al mundo.</p><p>Mas cosas sobre LEGO Batman: DC Super Heroes:</p>
<ul>
 	<li>TRAJES</li>
 	<li>DISPOSITIVOS</li>
 	<li>SÚPER HABILIDADES</li>
 	<li>ESTILOS DE CONTROL DINÁMICO</li>
</ul>";
include_once '../templates/game/v1.php';