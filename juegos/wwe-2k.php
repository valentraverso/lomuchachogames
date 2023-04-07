<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'WWE 2K'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Juega partidas épicas entre leyendas y superestrellas de la WWE para averiguar quién es el mejor luchador de todos los tiempos, cada uno con sus propios movimientos estrella y superespeciales.</p>

<p>Pelea en los ring de WWE 2K para Android por el cinturon tan preciado. Ademas, crea y personaliza tu propio luchador de WWE a tu gusto.</p>

<p>Descarga <strong>WWE 2K</strong> APK + OBB para Android en LOMUCHACHOgames y gana cada batalla.</p><p>Lo que trae el WWE 2K gratis apk + datos obb:</p>
<ul>
 	<li>Crear una superestrella
</li>
 	<li>Modo de carrera</li>
 	<li>Formación
</li>
 	<li>Toneladas de desbloqueables
</li>
</ul>";
include_once '../templates/game/v1.php';