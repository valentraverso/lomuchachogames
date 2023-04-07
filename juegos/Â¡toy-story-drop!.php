
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = '¡Toy Story Drop!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]";
$texto = "<p>El mundo de Disney•Pixar y Toy Story viene a la vida en el único juego móvil que está completamente ambientado en el universo de Toy Story, incluyendo el próximo Toy Story 4</p>

<p>Ayuda a Woody, Buzz y queridos personajes, clásicos y nuevos, a desbloquear sus historias, una escena a la vez, mientras te aventuras a través de lugares icónicos, como la Habitación de Andy, Pizza Planeta y mucho más.</p>

<p>Descargar<strong> ¡Toy Story Drop! </strong>apk gratis para Android en LOMUCHACHOgames y se el mejor amigo fiel.</p>";
$info = "<p>¡Toy Story Drop! para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>Explora lugares icónicos</li>
 	<li>Llama a los juguetes a tu ayuda</li>
 	<li>Toca y descubre divertidas referencias</li>
</ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga ¡Toy Story Drop! GRATIS para Android</title><meta name="description" content="Descarga ¡Toy Story Drop! GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="¡Toy Story Drop!, Big Fish Games, Android,"></head>
    <body>';
include_once '../php/menuentre.php';
echo '
    </div>
<div class="container-fluid">
    <div class="row" >
        <div class="col-xs-4">
            <img class="fotos" src="../'.$img.'">
        </div>
        <div class="col-xs-8" id="principal3s">
            <h1 class="titulo">' . $nombre . '</h1>
                <span style="margin-left:5px;">Big Fish Games</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/casual.php"><b>Casual</a></b> </div>
            <a href="https://lomuchachogames.com"><p class="volver">Volver a LOMUCHACHOgames</p></a>
        </div> 
    </div>
    <div class="row" id="r">
        <div class="col-xs-8" id="v">
            <strong>Version</strong><br>
            <span>'. $version . '</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Tamaño</strong><br>
            <span>' . $tamano . '</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Creador</strong><br>
            <span>Big Fish Games</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>5.0.o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download1324.mediafire.com/9hfkhgxei8ig/r74tfb1pb6b3bqi/TSD1.1.1byLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/tsd-1-1-1apkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';