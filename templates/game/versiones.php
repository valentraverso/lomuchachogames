<!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/game.php';
         ?>
            <meta name="description" content="Descarga la ultima version de Archero HACK gratis para Android, o tambien podes descargar versiones anteriores. Archero HACK Android, descargar Archero HACK y todas sus versiones."/> 
            <meta name="keywords" content="Archero HACK, descargar Archero HACK,"></head>
    <body>
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menuentre.php';
        ?>
    </div>
    <div class="row pri" >
        <div class="img">
            <img class="fotos" src="<?php echo 'https://lomuchachogames.com/'.$ft;?>">
        </div>
        <div id="principal3s">
            <h1 class="titulo"><?php echo $nombre;?></h1>
                <span style="margin-left:5px;"><?php echo $creador;?></span>
        </div> 
    </div>
    <div class="row" id="r">
        <div class="col-xs" id="t">
            <strong>Tamaño</strong><br>
            <span><?php echo $tamano?></span>               
        </div>
        <div class="col-xs" id="a">
            <strong>Creador</strong><br>
            <span><?php echo $creador?></span>               
        </div>
        </div>
        <div class="getter">
        <?php
        $pe = "SELECT * FROM version WHERE nombre = '$nombre'";
$d = $conn->query($pe);
while($f = mysqli_fetch_array($d)){
    echo '<script>function as'.$f['n'].'(el){if(el.className == "cubes"){el.classList.add("open");var id = document.getElementById("oculto'.$f['n'].'");id.id = "abierto";}else if(el.className == "cubes open"){var id = document.getElementById("abierto");id.id = "oculto'.$f['n'].'";el.classList.remove("open");}}</script>
    <div class="cubes" onclick="as'.$f['n'].'(this)">
    <div class="vVistos">
<span id="s">'.$f['version'].'</span> 
<i class="fas fa-chevron-up" id="abajo"></i>
<span id="x">'.$f['tamano'].'</span>
    </div>
    <div class="insideoculto" id="oculto'.$f['n'].'">
    <div class="uasdh">
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
    if(empty($f['mediafire obb'])){echo '</div></div>';}echo '</div>';
}
    ?>
</div>
<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/footer.php';
?>