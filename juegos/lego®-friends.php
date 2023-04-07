<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO® Friends'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Compra los últimos trajes y accesorios, seleccione el peinado perfecto, la decoración de su dormitorio e incluso elegir una mascota.</p>

<p>Elija cómo pasar sus vacaciones de verano; si usted prefiere asistir a caballo campamento, perfeccionar una rutina de baile, jugar a fútbol, ​​practicar karate, o cuidar de un animal en el centro de rescate, que puede hacer estas cosas y más a medida que expresar su creatividad y crear recuerdos divertidos con su cinco amigos nuevos.</p>

<p>Descargar <strong>LEGO® Friends </strong>apk gratis para Android en LOMUCHACHOgames y haz lo que mas te guste.</p><p>LEGO® Friends para Android es una gran opcion, algunas características son:</p>
<ul>
 	<li>Desarrolle sus amistades</li>
 	<li>Atención a su mascota</li>
 	<li>Disfruta de la Libertad Total</li>
</ul>";
include_once '../templates/game/v1.php';