
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO Harry Potter: años 1 a 4'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Juega siendo Harry, Ron, Hermione o muchos otros a medida que exploras Hogwarts y te sumerges en incontables horas de juego a través de más de 40 niveles basados en los libros y películas de Harry Potter.</p>

<p>LEGO Harry Potter: años 1 a 4 gira en torno a los cuatro primeros libros y películas de Harry Potter y parte de la base de anteriores videojuegos de LEGO® para ofrecer una mezcla de diversión, juego accesible y humor desenfadado que atrae a todas las edades. Los jugadores pueden explorar el mundo de la magia y sentirse como si estuvieran en Hogwarts.</p>

<p>Descargar<strong> LEGO Harry Potter: años 1 a 4 </strong>apk + obb gratis para Android en LOMUCHACHOgames y se el mejor mago.</p>";
$info = "<p>LEGO Harry Potter: años 1 a 4 para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li> Una auténtica experiencia Harry Potter</li>
 	<li> Intuitivos controles de pantalla táctil</li>
 	<li>Juega como más de 100 personajes</li>
</ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga LEGO Harry Potter: años 1 a 4 GRATIS para Android</title><meta name="description" content="Descarga LEGO Harry Potter: años 1 a 4 GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="LEGO Harry Potter: años 1 a 4, Warner Bros. International Enterprises, Android,"></head>
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
                <span style="margin-left:5px;">Warner Bros. International Enterprises</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/accion.php"><b>Accion</a></b><a href="https://lomuchachogames.com/juegos/categorias/aventura.php"><b>Aventura</a></b> </div>
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
            <span>Warner Bros. International Enterprises</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.0.3 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>+10</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download1589.mediafire.com/5b5pz279880g/66q40qt4bx5t0dt/LEGOHPA14byLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/legohpa14apkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="http://download975.mediafire.com/d2khlqbdxo1g/swxr4zdfsxc4m3o/LEGOHPA14byLOMUCHACHOgames.zip" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="http://evassmat.com/18932179/legohpa14obbmega" id="megaapk">OBB Mega</a>
        </div>
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';