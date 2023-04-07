<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'RFS - Real Flight Simulator'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Proba una nueva experiencia de vuelo totalmente original en cualquier parte y rincon del mundo, explora escenarios y aeropuertos en una muy alta resolución con mapas satélite, edificios 3D, pistas, procedimientos y tráfico aéreo. Únete a los mejores vuelos en tiempo real, chatea con otros pilotos y únete a ellos en multijugador para disfrutar en conjunto.</p><p>Gestiona los novedosos planes de vuelo e interactúa con los controladores aéreos del ATC de ultima generación. Accede a miles de diseños creados por la comunidad y personaliza aviones, indicadores, fallos y condiciones meteorológicas.</p><p>Descarga&nbsp;<strong>RFS - Real Flight Simulator</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y vuela alto piloto.</p><p><strong>RFS - Real Flight Simulator </strong>APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>PLAN DE VUELO AVANZADO</li><li>VUELOS EN TIEMPO REAL</li><li>MULTIJUGADOR</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';