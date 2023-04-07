<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Motocicleta Carreras Campeón MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Disfruta de la velocidad excitante con varias motos de alto desempeño. Participa para ser el Campeón en varias carreras.Ten una experiencia real de carrera de motos con gráficos realistas de alta calidad y controles simples.</p><p>Colecciona y personaliza varias motos como Replica, Cruiser, y Big Scooter, experiencia la conducción de moto con cámara en primera persona, cuanto más cerca adelantes a tus contrincantes, más puntos puedes conseguir.</p><p>Descarga&nbsp;<strong>Motocicleta Carreras Campeón MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y conquista las pistas.</p>";
$info = "<p><strong>Motocicleta Carreras Campeón MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD de Dinero</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';