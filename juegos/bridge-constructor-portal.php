<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bridge Constructor Portal'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Bienvenido a Bridge Constructor Portal APK , este juego combina el clásico Bridge Constructor con Portal. Eres un nuevo miembro del personal y tu misión sera construir puentes rampas, toboganes y otras construcciones para que los coches lleguen a salvo a su destino.</p>
<p>Lo mejor es que podrás aprovechar los artículos de Portal para que se facilitarte tu trabajo y también para superar los distintos obstáculos que encontraras en los puentes que hagas.</p>
<p>Descarga <strong>Bridge Constructor Portal</strong> para Android Gratis APK en LOMUCHACHOgames y entra a este genial juego de construir puentes y portales.</p><p>Descarga Bridge Constructor Portal por Mega o Mediafire y empeza jugar en Android a esta grandiosa entrega que posee las siguientes caracteristicas:</p>
<ul>
<li>Vive la fusión de dos mundos: el primer Bridge Constructor™ con una licencia oficial de Portal™.</li>
<li>Desarrolla estructuras complejas en los laboratorios de Aperture Science.</li>
<li>Deja que GLaDOS te acompañe a través de complicadas aventuras físicas.</li>
<li>Usa portales, placas de salto de fe, geles de propulsión, geles de repulsión y muchas cosas más para dominar las difíciles tareas.</li>
<li>Evita peligros como torretas centinelas, redes de emancipación material, campos láser y ácido.</li>
<li>Ayuda a tus Dobladores a llegar a la línea de meta individualmente o en convoy.</li>
</ul>";
include_once '../templates/game/v1.php';