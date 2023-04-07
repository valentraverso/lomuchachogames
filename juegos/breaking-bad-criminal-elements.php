<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Breaking Bad: Criminal Elements'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Creado en colaboración con los creadores de la popular serie de televisión, Breaking Bad: Criminal Elements es un constructor base que gira entorno a la historia y que te permite entrar y dar forma al mundo que creó Heisenberg.</p>

<p>Hay mucho en juego, la moralidad está en duda, las personalidades son volátiles, pero sin importar las amenazas, las ganancias deben continuar.</p>

<p>Descargar<strong> Breaking Bad: Criminal Elements </strong>apk gratis para Android en LOMUCHACHOgames y establece tu propio imperio.</p><p>Breaking Bad: Criminal Elements para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>Crea tu base</li>
 	<li>Expande tu territorio</li>
 	<li>Desarrolla el laboratorio</li>
</ul>";
include_once '../templates/game/v1.php';