<?php
$title = "Descargar juegos de altos requisitos para pc gratis - LOMUCHACHOgames PC";
$description = "En LOMUCHACHOgames PC podras descargar juegos gratis de altos requisitos para Windows, tenemos todas las categorias y la más amplia bibliotecas de titulos para tu computadora. Juegos para pc de maximo de 6 o 7 GB";
$tags = "LOMUCHACHogames PC, juegos para pc de altos requisitos, juegos para windows de altos requisitios, juegos de altos requisitos";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/parts/header/general.php';
?>
<body>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/parts/menu/menu.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
echo "<div class='eighty'>";

$categoryName = '<h1>Juegos de altos requisitos</h1>';

$bajosRequisitos = "SELECT * FROM juegos WHERE size LIKE '%GB%' AND size > 10";
$universal = $conn->query($bajosRequisitos);

include_once $_SERVER['DOCUMENT_ROOT'].'/templates/categories/grid-with-games.php';
?>  
</div>
</body>