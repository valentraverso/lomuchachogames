<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Euro Truck Driver'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Euro Truck Driver para Android es el juego de conducir camiones mas descargado de todos. Con sus camiones europeos a los que les puedes agregar una gran gama de personalizaciones, este simulador de camiones te ofrece una experiencia emocionante al volante que te hará sentir como si condujeras camiones de verdad.</p>

<p>Viaja por millones de paises de Europa con tu camion y entrega mercaderias, o sino juego otros modos de juego que ofrece Euro Truck Driver.</p>

<p>Descarga <strong>Euro Truck Driver </strong>APK + OBB para Android GRATIS en LOMUCHACHOgames y conduce miles de camiones.</p><p>Euro Truck Driver es el juego de camiones para Android lider, posee millones de caracteristicas como:</p>
<ul>
 	<li>7 marcas europeas de camiones (Ejes 4x2 y 6x4).</li>
 	<li>Más de 20 ciudades realistas.</li>
 	<li>Conduce por carreteras y autopistas.</li>
 	<li>Controles fáciles (inclinación, botones o volante touch).</li>
 	<li>Condiciones climáticas realistas y ciclos día-noche.</li>
 	<li>Daños visuales en los camiones.</li>
 	<li>Interiores detallados en cada marca de camión.</li>
 	<li>Sonidos de motor sorprendentes.</li>
 	<li>Sistema de tráfico AI mejorado.</li>
 	<li>Modo multijugador en línea con Servidores o modo de Convoy.</li>
 	<li>Logros y Tablas de clasificación.</li>
</ul>";
include_once '../templates/game/v1.php';