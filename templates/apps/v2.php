<?php
/* Variables */
$id = $fila['id'];
$nombre = $fila['nombre'];
$version = $fila['version'];
$tamano = $fila['tamano'];
$creator = $fila['creador'];
$edad = $fila['publico'];
$mediafireapk = $fila['mediafire apk'];
$megaapk = $fila['mega apk'];
$img = $fila['texto'];
$categoria = $fila['categoria'];
$texto = $fila['description'];
$versiondispositivo = $fila['versionAndroid'];

/* Cuenta letras del OBB */
$pipi = strlen($fila['mediafire obb']);
$dou = strlen($fila['mega obb']);

/* SEO */ 
if($pipi > 1 and $dou > 1){
    $obibi = " + OBB";
}
if(strpos($nombre, "MOD") === true){
    $mod = "MOD";
}
$title = "Descargar $nombre $mod APK$obibi para Android - LOMUCHACHOgames";
$description = "Descargar $nombre  para Android gratis. Entra y aprende como instalar $nombre $mod APK$obibi última versión para tu celular gratis.";
$key = "$nombre, descargar $nombre $mod APK$obibi, $nombre $mod APK$obibi gratis, descargar $nombre para android,";

/* Reconoce si esta el OBB */
if(!empty($fila['mediafire obb'])){
    $medobb = '<a target="_blank" style="margin-top:5px;" rel="external nofollow" href="'.$fila['mediafire obb'].'" id="mediafireapk" class="a">
    <div class="traver">
            OBB Mediafire
        </div></a>';
}
if(!empty($fila['mega obb'])){
    $megobb = ' <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="'.$fila['mega obb'].'" id="megaapk" class="a"><div class="traver">
           OBB Mega
        </div></a>';
}

/* Tipo de archivo */
$tipo = "app";

include $_SERVER['DOCUMENT_ROOT'].'/templates/game/parts/votes.php';

/* Front End */
include_once '../templates/header/game.php';
include_once '../templates/menu/menuentre.php';

echo '
    </div>
<div class="container-fluid">
    <div class="row pri" >
        <div class="img">
            <img class="fotos" src="'.$img.'" alt="Portada de '.$nombre.'">
        </div>
        <div id="principal3s">
            <h1 class="titulo">' .$nombre. '</h1>
                <span>' .$creator. '</span><br>
'.$mostaza.'
            <p id="id" style="display:none">'.$id.'</p>
            <p id="tipo" style="display:none">'.$tipo.'</p>
            <p id="promedio" style="display:none">'.$promedy.'</p>
        </div> 
    </div>
    <div class="row" id="r">
        <div class="col-xs" id="v">
            <strong>Version</strong><br>
            <span>'. $version . '</span>               
        </div>
        <div class="col-xs" id="t">
            <strong>Tamaño</strong><br>
            <span>' . $tamano . '</span>               
        </div>
        <div class="col-xs" id="t">
            <strong>Android</strong><br>
            <span>' . $versiondispositivo. '</span>               
        </div>
        <div class="col-xs" id="a">
            <strong>Apto</strong><br>
            <span>' . $edad . '</span>               
        </div>
    </div>
    
    <div class="row" id="buttond">
     <a target="_blank" rel="external nofollow" href="'.$mediafireapk.'" id="mediafireapk" class="a">
        <div class="traver">
              APK Mediafire
        </div></a>
        <a target="_blank" rel="external nofollow" href="'.$megaapk.'" id="megaapk" class="a">
        <div class="traver">
            APK Mega
        </div></a>';
         
        /* Display de OBB */
        if($pipi > 1 or $dou > 1){
        echo $medobb . $megobb;
        }

  echo'  </div>
    <div class="report">
       <span class="reports"><a href="https://lomuchachogames.com/help/report?min=0&id='.$id.'&tipo='.$tipo.'">Reportar nueva actualizacion</a></span>
    </div>
    
        <div class="row about sg">
    <h2><i class="fa fa-arrow-right"></i>  Califica el juego</h2>
    <div id="star_rating"></div></div>
    <div class="row about sg">
    <h2><i class="fa fa-arrow-right"></i>  Sobre el juego</h2>
    '.$texto.'
    </div>';
    
     
     //Consulta si existe creador
     $crea = "SELECT * FROM creadores WHERE nombre = '$creator'";
     $aja = $conn->query($crea);
     $numero = mysqli_num_rows($aja);
     //Estructura creadores
     if($numero == 1){
         $ful = mysqli_fetch_array($aja);
         echo '
         <h2>CREADOR</h2>
         <div class="creador-game">
         <div class="logo-creador">
         <img src="'.$ful['foto'].'">
         </div>
         <div class="name-creador">
         <span>'.$ful['nombre'].'</span>
         </div>
         </div>
         ';
     }
     ?>
     
    </div>
    <?php
           $texto1 = str_replace(" ", "-", $nombre);
    $texto_guion = str_replace(":", "", $texto1);
            $select = "SELECT COUNT(nombre) FROM version WHERE nombre = '$nombre' ORDER BY version.version DESC";
$dato = $conn->query($select);
$fila = mysqli_fetch_array($dato);
$count = $fila['COUNT(nombre)'];
if($count > 4){
echo '
              <div class="col-xs-12">        
<div class="otrasversiones">
        <div class="texto">
            <h3 style="font-size:17px"><i class="fa fa-arrow-right"></i> Otras Versiones</h3>
        </div>
        <div class="inside">';
$array = array();
array_push($array, $count);
$arrat = implode($array);
if($arrat >= 2){
    $selec = "SELECT * FROM version WHERE nombre = '$nombre'";
$data = $conn->query($selec);

    while($fil = mysqli_fetch_array($data)){
 echo'
            <a href="https://lomuchachogames.com/juegos/versiones/'.$texto_guion.'">
            <div class="cuadradito">
   <span id="vspan">'.$fil['version'].'</span>
                          <span id="tspan">'.$fil['tamano'].'</span>
            </div>
        </a>
';
}
}
echo ' </div>
        </div>
        </div>';
} 
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/sliders/apps/juegosrandom.php';
echo '<div class="row about">
    <p>En LOMUCHACHOgames.com vas a encontrar uno de los mayores directorios de juegos gratis para Android de toda internet. En esta pagina hay todas las APK y OBB que puedas imaginar, ademas tenemos MODs de diferentes juegos los cuales te van a encantar. ¿Que estas esperando para descargar?</p>
    <p style="font-size:12px;">LOMUCHACHOgames respeta los derechos de propiedad intelectual de terceros, al hacer click en los botones de arriba estas infringiendo los derechos de propiedad intelectual de la empresa productora de este juego.</p>
</div>
</div></div>';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/footer.php'; 
echo '
</div>
</div>
</div>
<script src="https://lomuchachogames.com/js/rating.js?v=2.19"></script>
</body>
</html>
';
include $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
?>