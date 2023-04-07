<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Buscar Palabras Premium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En esta edición paga de Buscar Palabras Premium en donde buscaras las palabras escondidas por todos lados de la sopa de letras. Este juego es apto para toda la familia ya que brinda la habilidad de buscar, identificar y entrenar las distintas habilidades mentales.</p><p>Hay una gran cantidad de temas donde las palabras pueden estar escondidas en diagonal, horizontal, vertical o en sentido contrario. Recuerda que las palabras están perfectamente escondidas.</p><p>Descarga&nbsp;<strong>Buscar Palabras Premium</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y encontra las palabras.</p><p><strong>Buscar Palabras Premium</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Miles de puzzles de letras para resolver</li><li>Más de 50 categorías de palabras para buscar</li><li>Adaptado para jugadores senior y personas de la tercera edad.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';