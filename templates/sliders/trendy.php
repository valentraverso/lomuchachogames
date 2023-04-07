<div class="trendy">
<h3>Tendencias</h3>
 <div class="slide-contenedor">
     <?php 
include_once 'php/conexion-database.inc.php';
    $getIncrease = "SELECT * FROM tendencias ORDER BY tendencias.int DESC LIMIT 4";
    $getIncreaseC = $conn->query($getIncrease);


while($getIncreasef = mysqli_fetch_array($getIncreaseC)){

    if(strpos($getIncreasef['url'], "apps") === false){
        $getIncreaseGame = "SELECT * FROM juegos WHERE link = '$getIncreasef[url]'";
        $getIncreaseGameC = $conn->query($getIncreaseGame);
        $f = mysqli_fetch_array($getIncreaseGameC);
    }else{
        $getIncreaseGame = "SELECT * FROM apps WHERE link = '$getIncreasef[url]'";
        $getIncreaseGameC = $conn->query($getIncreaseGame);
        $f = mysqli_fetch_array($getIncreaseGameC);
    }

echo '
        <div class="miSlider fade">
        <div class="misliderimg">
            <img src="'.$f['texto'].'" alt="">
            </div>
            <div class="myslidertext">
            <p>'.$f['nombre'].'</p><br>
            <span style="font-size:12px;font-weight: 500;">Vistas '.$getIncreasef['int'].'</span>
            </div>
            <div class="direcciones">
            <p class="atras" onclick="avanzaSlide(-1)">&#10094;</p>
            <a href="'.$f['link'].'"></a>
            <p class="adelante" onclick="avanzaSlide(1)">&#10095;</p>
         </div>
        </div>
';
}
?>
    </div>
            <div class="barras">
            <span class="barra active" onclick="posicionSlide(1)"></span>
            <span class="barra" onclick="posicionSlide(2)"></span>
            <span class="barra" onclick="posicionSlide(3)"></span>
            <span class="barra" onclick="posicionSlide(4)"></span>
        </div>
</div><br><br>