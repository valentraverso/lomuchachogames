<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Poly Bridge'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 or +";
$texto = "<p>Si te gustan los juegos de puzles y pensar mucho, Poly Bridge se va a transformar en tu juego favorito.&nbsp;</p><p>En este divertido juego tendras que conseguir que los autos crucen de un lado al otro del rio sin que tu obra maestra se destroce, pero no es tan facil como se escucha.</p><p>Descarga&nbsp;&lt;strong&gt;<strong>Poly Bridge</strong>&lt;/strong&gt;gratis para Android full apk en LOMUCHACHOgames y crea puentes como el mejor arquitecto de la historia!</p><p>Ten cuidado con los barcos que van a pesar debajo de tu puente y te lo destrozaran, y los camiones con sus pesos insoportables para cualquier tipo de constrcion hecha por el hombre.</p><ul><li>105 niveles en la Campaña</li><li>Modo de construcción libre.</li><li>22 logros.</li><li>Pistones hidráulicos.</li><li>Puentes levadizos móviles.</li><li>Balanceos, saltos y puentes clásicos.</li></ul>";
include_once '../templates/game/v1.php';