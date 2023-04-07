<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Room'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Bienvenido a The Room, un rompecabezas interactivo envuelto en un juego de misterio, todo ello dentro de un maravilloso escenario 3D táctil. Haz trabajar tu mente y resuelve todos los rompecabezas que estejuego te ponga en frente.</p>

<p>Un intenso viaje lleno de belleza, peligro y misterio por igual. Transpórtate a un espacio único que combina fascinantes gráficos con intrigantes problemas que resolver.</p>

<p>Descarga <strong>The Room</strong> gratis apk + datos obb para Android en LOMUCHACHOgames y entra en la habitacion mas complicada de resolver.</p><p>Lo que trae el The Room Android:</p>
<ul>
<li>Gráficos increíblemente realistas: los gráficos más naturales que se han visto nunca en un dispositivo móvil.</li>
<li>Escalofriantes controles con un solo dedo: controles táctiles tan naturales que puedes jugar con un solo dedo para explorar este escenario 3D tan hermoso como misterioso.</li>
<li>Fantástico diseño de inicio inmediato: comenzar a jugar es fácil; ¡lo difícil es desengancharse! Los secretos de The Room te absorberán antes de que te des cuenta de que estás jugando.</li>
<li>Fascinantes niveles de misterio: ¿crees que sabes lo que estás viendo? Vuelve a planteártelo.</li>
</ul>";
include_once '../templates/game/v1.php';