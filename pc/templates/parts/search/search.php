<?php
$q = $_GET['term'];

$title = "Resultados para $q - LOMUCHACHOgames PC";
$description = "En LOMUCHACHOgames PC podras descargar juegos gratis para Windows, tenemos todas las categorias y la más amplia bibliotecas de titulos para tu computadora.";
$tags = "LOMUCHACHogames PC, juegos para pc, juegos para windows,";

include_once $_SERVER['DOCUMENT_ROOT'].'/templates/parts/header/general.php';
?>
<body>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/parts/menu/menu.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
echo "<div class='eighty'>
<div class='searchDif'><span class='searchTerm'>$q</span></div>
<div class='miti25'>
<div class='leftSearch'>";
$selectS = "SELECT * FROM juegos WHERE title LIKE '%$q%' OR developer LIKE '%$q%' OR tags LIKE '%$q%'";
$selectSConn = $conn->query($selectS);

while($fecthS = mysqli_fetch_array($selectSConn)){
    echo '<div class="gameRecostado">
    <a href="'.$fecthS[link].'">
    <div class="gameRecostadoInside">
        <div class="gameRecostadoImg">
            <img src="'.$fecthS[poster].'" alt="">
        </div>
        <div class="gameRecostadoInfo">
            <p>'.$fecthS[title].'</p>
        </div>
        <div class="gameRecostadoSize">
            <p>'.$fecthS[size].'</p>
        </div>
        <div class="gameRecostadoDate">
            <p>'.$fecthS[date].'</p>
        </div>
    </div>
    </a>
</div>';
}
?>
</div>
<div class="rightSearch">

</div>
</div>
</div>
</body>