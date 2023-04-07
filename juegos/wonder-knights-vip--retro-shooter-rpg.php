<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Wonder Knights VIP : Retro Shooter RPG'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En un impresionante juego de disparos de desplazamiento lateral vertical, usted será responsable de los triples héroes llamados caballeros Wonder y su aventura. Como uno de los mejores juegos de disparos este año, este arcade asegura horas y horas de diversión increíble, envasados ​​en impresionantes gráficos, las ilustraciones únicas y emocionantes, una gran cantidad de mejoras, las armas y los momentos de batalla tiro que le excitar al máximo.</p>

<p>Combina batalla espada con el tiro con arco, bombas y disparar el arma contra un montón de monstruos impredecibles, enemigos y jefes.</p>

<p>Descarga <strong>Wonder Knights VIP : Retro Shooter RPG </strong>apk gratis en LOMUCHACHOgames y defiende lo que mas tengas.</p><p>Lo que trae Wonder Knights VIP : Retro Shooter RPG gratis:</p>
<ul>
 	<li>Impresionantes gráficos y animación</li>
 	<li>Los personajes con diferentes roles</li>
 	<li>Los monstruos y trampas con variedad de habilidades y efectos</li>
</ul>";
include_once '../templates/game/v1.php';