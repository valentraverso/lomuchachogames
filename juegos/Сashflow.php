<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'СASHFLOW'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "Elabore su estrategia financiera para salir de Rat Race utilizando bienes raíces, negocios, el mercado de valores y domine CASHFLOW: ¡el juego de inversión.</p>
Basado en el juego de mesa original de Robert Kiyosaki, perfeccione su estrategia financiera y salga de la Carrera de ratas para construir su Imperio de FLUJO DE CAJA y reclame el dominio sobre el reino (el reino es su sala de estar).</p>
<p>Descarga <strong>CASHFLOW</strong> apk ultima version en LOMUCHACHOgames y recorre otro planeta!</p>";
include_once '../templates/game/v1.php';