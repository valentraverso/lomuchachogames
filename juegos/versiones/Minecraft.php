<?php 
include_once '../../php/conexion-database.inc.php';
$select = "SELECT * FROM juegos WHERE nombre = 'minecraft'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$ft = "$fila[texto]";
$creador= "$fila[creador]";
$titulopagina =  "Todas las versiones de minecraftpara Android - Descargar minecraft ultima version";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../../plantillas/headerversiones.php';
echo '
            <meta name="description" content="Descarga la ultima version de minecraft gratis para Android, o tambien podes descargar versiones anteriores. minecraft Android, descargar minecraft y todas sus versiones."/> 
            <meta name="keywords" content="minecraft, descargar minecraft,"></head>
    <body>';
include_once '../../php/menuentre.php';
echo '
    </div>
<div class="container-fluid">
    <div class="row" >
        <div class="col-xs-4">
            <img class="fotos" src="../../'.$ft.'">
        </div>
        <div class="col-xs-8" id="principal3s">
            <h1 class="titulo">' . $nombre . '</h1>
                <span style="margin-left:5px;">' . $creador . '</span>
            <a href="https://lomuchachogames.com"><p class="volver">Volver a LOMUCHACHOgames</p></a>
        </div> 
    </div>
    <div class="row" id="r">
        <div class="col-xs-8" id="v" style="flex: 0 0 110px;">
            <strong>Version</strong><br>
            <span>'. $version . '</span>               
        </div>
        <div class="col-xs-8" id="t" style="flex: 0 0 110px;">
            <strong>Tamaño</strong><br>
            <span>' . $tamano . '</span>               
        </div>
        <div class="col-xs-8" id="t" style="flex: 0 0 110px;">
            <strong>Creador</strong><br>
            <span>' . $creador . '</span>               
        </div>
        </div>';
        $pe = "SELECT * FROM version WHERE nombre = '$nombre'";
$d = $conn->query($pe);
while($f = mysqli_fetch_array($d)){
    echo '<script>function cambio'.$f['n'].'(el){if(el.className == "cube"){el.classList.add("open");var id = document.getElementById("oculto'.$f['n'].'");id.id = "abierto";}else if(el.className == "cube open"){var id = document.getElementById("abierto");id.id = "oculto'.$f['n'].'";el.classList.remove("open");}}</script>
    <div class="cube" onclick="cambio'.$f['n'].'(this)">
    <div class="vVistos">
<span id="s">'.$f['version'].'</span> 
    <span class="bttnn glyphicon glyphicon-chevron-down" id="abajo" ></span>
    <span id="x">'.$f['tamano'].'</span>
    </div>
    <div class="insideoculto" id="oculto'.$f['n'].'">
    <div class="col-xs-6" id="cubito">
               <a target="_blank" rel="external nofollow" href="'.$f['mediafire apk'].'" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6" id="cubito">
            <a target="_blank" rel="external nofollow" href="'.$f['mega apk'].'" id="megaapk"?id=X>APK Mega</a>
         </div>
';
    if(!empty($f['mediafire obb'])){
        echo'<div class="col-xs-6" id="cubito">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="'.$f['mediafire obb'].'" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6" id="cubito">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="'.$f['mega obb'].'" id="megaapk">OBB Mega</a>
        </div> </div> </div>';
    }
    echo ' ';if(empty($f['mediafire obb'])){echo '</div></div>';}
    }
    echo '
    </div>
    <div class="container-fluid">
    <hr>
    <div class="row" id="n">
       <div class="col-xs-12">
        <h2>NECESARIO PARA LA INSTALACION</h2>
        </div>
           <div class="col-xs-12">
        <div class="esfile">
            <div class="ftesfile"><img src="../../fotos/Esfile.jpg"></div>
            <div class="descripcion"><span>Es File Explorer Pro</span><br>
                <span id="t">7 MB</span></div>
        </div>       
        <br>
        </div>
    </div>
    <hr style="margin-top:5px;margin-bottom:-5px;">
    <div id="p">
        <a href="http://baljala.com" target="_blank" ><img src="../../fotos/Patrocinador.png"></a>
</div>';
include_once '../../plantillas/footer.php';echo 
'<script src="../../js/escondite.js"></script>
<script src="../../js/menu.js"></script>';