<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Idle Supermarket Tycoon HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>¿Estas listo para abrir tu supermacado? Pone&nbsp;un horno, fruterías, verdulerías, ofrece pescado de calidad, hamburguesas y filetes de ternera en la carnicería. Gestiona productos y precios para traer a mas consumidores,hace de tu Idle Supermarket Tycoon sea el mejor.</p><p>Si te gustan los juegos ociosos, y los juegos de tocar la pantalla, te gustará este juego incremental de gestión de mercados con su jugabilidad casual.</p><p>Descarga&nbsp;<strong>Idle Supermarket Tycoon HACK&nbsp;</strong>1.1 apk en LOMUCHACHOgames y convertite en un accionista de supermercados.</p><p>Lo que trae Idle Supermarket Tycoon Mod 1.1 apk:</p><ul><li>Jugabilidad sencilla y casual</li><li>Diferentes retos para completas</li><li>Alucinantes animaciones y gráficos 3D</li><li>Productos únicos para vender</li><li>Toma importantes decisiones de gestión para hacer crecer tu negocio</li><li>Salva tu progreso en la nube y recupera tu partida si cambias de dispositivo.</li></ul>";
include_once '../templates/game/v1.php';