<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Need For Speed: No Limits'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Sube a tu auto y coronate como el rey de las carreras clandestinas, en Need For Speerd No Limits APK + OBB para Android.   Personaliza tu coche y hazlo mas rápido tuneandolo con el dinero que ganes de las carreras que corras, cada una de estas te dara una diferente recompensa depende en el puesto que termines la carrera.</p>

<p>Para competir puedes elegir alguno de los autos mas importantes del momento. El manejo de los vehículos es bastante sencillo ya que estos aceleran por si solos, por lo cual hay que darles únicamente la dirección que van a tomar.</p>

<p>Descargar <strong>Need For Speed No Limits </strong>para Android APK + datos OBB gratis en LOMUCHACHOgames y corre las carreras de coches mas divertidas.</p><p>Descarga Need For Speed NL Las carreras y vas a poder acceder a las siguientes características del juego:</p>
<ul>
 	<li>LLEVA COCHES AL EXTREMO CON LA PERSONALIZACIÓN</li>
 	<li>CONDUCE RÁPIDO, SIN MIEDO</li>
 	<li>COMPITE PARA GANAR</li>
</ul>";
include_once '../templates/game/v1.php';