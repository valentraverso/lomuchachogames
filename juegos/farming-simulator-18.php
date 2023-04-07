<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Farming Simulator 18'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Conviértete en un granjero Farming Simulator 18, es&nbsp;un enorme mundo abierto con muchos tipos de cultivos, cuida a tu ganado, participa en la silvicultura y vende tus productos en el mercado para expandir tu granja.</p><p>Tiene acceso a una gran selección de más de 50 vehículos y máquinas agrícolas, recreados de más de 30 de los nombres más importantes de la industria, incluidas marcas de AGCO: Challenger, Fendt, Massey Ferguson y Valtra.&nbsp;Conduce y usa el equipo nuevo y coseche remolacha azucarera, papas, trigo, canola, maíz y, girasoles.</p><p>Descarga&nbsp;<strong>Farming Simulator 18</strong> para tu Android en LOMUCHACHOgames y diviertete cosechando de la manera mas realista.</p><p>Mas de Farming Simulator 18:</p><ul><li>Usan tractores y camiones reales de algunos los mayores fabricantes de maquinaria de agricultura.</li><li>Planta y cosecha seis tipos diferentes de cultivo: Trigo, colza, maíz, remolacha, patatas y girasol.</li><li>Cría cerdos y véndelos para conseguir beneficio.</li></ul>";
include_once '../templates/game/v1.php';