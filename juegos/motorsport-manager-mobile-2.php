<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'MotorSport Manager Mobile 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "6.0 or +";
$texto = "<p>Crea tu equipo de carreras y sal a la pista a la ganar, con uno de los juegos de automovilismo mas recomendados para Android. Motorsport Manager Mobile 2 te va a permitir crear tu equipo de carrera de carreras y modificarlo estrategicamente para llegar a la gloria.</p><p>Descargar&nbsp;&lt;strong&gt;<strong>Motorsport Manager Mobile 2</strong>&lt;/strong&gt;para Android gratis en LOMUCHACHOgames y deja todo en la pista de carreras.</p><p>LOMUCHACHOgames te da la posibilidad de elegir entre Mega y Mediafire para descargar tu juego favorito!!</p><ul><li>Mundo en evolucion</li><li>Decisiones en segundos</li><li>Muchos mas detalles</li></ul>";
include_once '../templates/game/v1.php';