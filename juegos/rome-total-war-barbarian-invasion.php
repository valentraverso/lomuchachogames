<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'ROME Total War Barbarian Invasion'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "8.0 o+";
$texto = "<p>Amenazado por las hordas de bárbaros, el imperio romano se enfrenta al día del Juicio. Como una de las 18 facciones, lucha para defender Roma o encabeza su destrucción. Participa en estrategia por turnos y en batallas en tiempo real para determinar el destino de Roma. Invade el imperio romano como una temible tribu de bárbaros. Forma una horda y captura o saquea enclaves en el mapa.</p><p>Disfruta de intuitivos controles táctiles y una interfaz diseñada para jugar en móvil. Convierte tu pantalla en un campo de batalla dinámico con miles de unidades en acción.</p><p>Descarga&nbsp;<strong>ROME Total War Barbarian Invasion</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y disfruta de la Roma antigua.</p><p><strong>ROME Total War Barbarian Invasion</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>UN JUEGO CLÁSICO EN UN NUEVO ENTORNO</li><li>FACCIONES DE BARBAROS FORMIDABLES</li><li>CAMPAÑA SIN LÍMITES</li><li>DISEÑADO PARA MÓVILES</li><li>BATALLAS 3D COLOSALES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';