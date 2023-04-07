<?php
$title = 'Buscaste '.$res.', estos son los resultados - LOMUCHACHOgames';
include_once '../templates/header/game.php';
echo '<body>';
include_once '../templates/menu/menuentre.php';
include_once $SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
$consulta = "SELECT * FROM juegos WHERE creador LIKE '%$res%' OR nombre LIKE '%$res%' OR relatedWords LIKE '%$res%'";
$datos = mysqli_query($conn, $consulta);
echo '<div class="buscado">
<div class="publicidad" style="text-align:center">
<p>Publicidad</p>

</div>
    <h2>Juegos y Apps</h2>';
while($fila = mysqli_fetch_array($datos)){
echo '<div class="busca">
<a href="'.$fila['link'].'">
    <div class="dentrobusca">
        <div class="imgbusca">
            <img src="'. $fila['texto'].'">
        </div>     
        <div class="infobusca">
            <div class="infoarriba">
                <div class="buscatextos">
                    <b>'.$fila['nombre'].'</b>
                </div>
                <div class="creadorbusca">
                    <span>'.$fila['creador'].'</span>
                </div>
            </div>
            <br>
            <div class="infoabajo">
                 <span>'.$fila['tamano'].'</span>       
            </div>
        </div>
            </a>
    </div>
    </div>
';
}
$consu = "SELECT * FROM apps WHERE creador LIKE '%$res%' OR nombre LIKE '%$res%' OR relatedWords LIKE '%$res%'";
$da = mysqli_query($conn, $consu);
while($fila = mysqli_fetch_array($da)){
echo '<div class="busca">
<a href="'.$fila['link'].'">
    <div class="dentrobusca">
        <div class="imgbusca">
            <img src="'. $fila['texto'].'">
        </div>     
        <div class="infobusca">
            <div class="infoarriba">
                <div class="buscatextos">
                    <b>'.$fila['nombre'].'</b>
                </div>
                <div class="creadorbusca">
                    <span>'.$fila['creador'].'</span>
                </div>
            </div>
            <br>
            <div class="infoabajo">
                 <span>'.$fila['tamano'].'</span>       
            </div>
        </div>
            </a>
    </div>
    </div>
';
}
$consult = "SELECT * FROM apps WHERE nombre LIKE '%$res%' OR creador LIKE '%$res%' OR relatedWords LIKE '%$res%'";
$dat = mysqli_query($conn, $consult);
$fila = mysqli_fetch_assoc($dat);
$array = $fila['id'];
$consulta = "SELECT * FROM juegos WHERE nombre LIKE '%$res%' OR creador LIKE '%$res%' OR relatedWords LIKE '%$res%'";
$data = mysqli_query($conn, $consulta);
$filaa = mysqli_fetch_assoc($data);
$arraya = $filaa['id'];
if(strlen($array) == 0 && strlen($arraya) <= 0){
    echo "<br><h3 style=\"font-size:15px;text-align:center;\">¡Upps! No hay Resultados</h3>
    <div class='buttonAsk'><a href='https://lomuchachogames.com/help/ask-for-game'><button>Pedir juego</button></a></div>";
}


echo '</div>';

$consul = "SELECT * FROM juegos ORDER BY RAND() LIMIT 7";
$dat = mysqli_query($conn, $consul);
echo '<br><br><div class="buscado">
    <h2>Tambien te puede interesar</h2>';
while($fila = mysqli_fetch_array($dat)){
echo '<div class="busca">
<a href="'.$fila['link'].'">
    <div class="dentrobusca">
        <div class="imgbusca">
            <img src="'. $fila['texto'].'">
        </div>     
        <div class="infobusca">
            <div class="infoarriba">
                <div class="buscatextos">
                    <b>'.$fila['nombre'].'</b>
                </div>
                <div class="creadorbusca">
                    <span>'.$fila['creador'].'</span>
                </div>
            </div>
            <br>
            <div class="infoabajo">
                 <span>'.$fila['tamano'].'</span>       
            </div>
        </div>
            </a>
    </div>
    </div>
';
}
echo '</div>';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/footer.php';
?>
</body>