
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Top Eleven 2019 - Manager de Fútbol'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Top Eleven 2019 es el juego de ser el DT tecnico de un equipo de futbol, lo bueno empieza cuando te das cuenta de que vos podes armar tu equipo. En Top Eleven apk para Android vas a poder comprar y vender jugadores en el mercado de transferencias de football.</p>

<p>Juega contra equipos online y sube en la tabla del campeonato para ser el mejor equipo del mundo. Desarrolla tu club y controla todos los aspectos de tu equipo: crea tus propias estrategias y alineaciones y enfréntate a José Mourinho, a tus amigos y a millones de Mánagers de Top Eleven a diario.</p>

<p>Descargar <strong>Top Eleven 2019 </strong>gratis para Android en LOMUCHACHOgames y dale vida a tu club de futbol.</p>";
$info = "<p>Top Eleven apk es el juego que te va a llevar a ser un gran manager, tu equipo te esta esperando.</p>
<ul>
 	<li>Mejora tu estadio con nuevas instalaciones.</li>
 	<li>Ficha a los mejores jugadores en el mercado de traspasos.</li>
 	<li>Diseña tus propias sesiones de entrenamiento para mejorar a tus jugadores.</li>
 	<li>Domina las tácticas y formaciones de tu equipo.</li>
 	<li>Desafía a otros Mánagers de fútbol a diario en competiciones y partidos amistosos.</li>
 	<li>Dirige tu equipo e influye en el resultado de los partidos en directo con la mejor experiencia futbolística para Mánagers.</li>
 	<li>Forma equipo con tus amigos en torneos semanales.</li>
 	<li>Compite en la Liga, la Copa, la Champions y la Super League.</li>
</ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga Top Eleven 2019 - Manager de Fútbol GRATIS para Android</title><meta name="description" content="Descarga Top Eleven 2019 - Manager de Fútbol GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="Top Eleven 2019 - Manager de Fútbol, Nordeus, Android,"></head>
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
                <span style="margin-left:5px;">Nordeus</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/deportes.php"><b>Deportes</a></b> </div>
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
            <span>Nordeus</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.1 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="https://download1647.mediafire.com/mag8pj8ypwvg/so87pixhaz9a8a3/TE-1.7.8byLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/te-1-7-8m" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';