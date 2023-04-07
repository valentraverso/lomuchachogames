<html>
<?php 
$creador = $_GET['id'];
include_once '../php/conexion-database.inc.php';
?>
<head>
<?php
$fila['link'] = "https://lomuchachogames.com/dif/creators?id=$creador";
$nombre = "Descargar juegos de ".$creador;
echo '  <meta property="og:description"   content="Descarga todos los juegos de '.$creador.' GRATIS para Android, conoce a esta empresa creadora de juegos en LOMUCHACHOgames." />
  <meta property="og:image"         content="https://lomuchachogames.com/fotos/creadores/'.$creador.'.jpg" />';
include_once '../plantillas/headerjuegos.php';
echo '
<title>Descarga juegos de '.$creador.' - LOMUCHACHOgames</title>
<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>  
</head>';
include_once '../php/menuentre.php';
$select = "SELECT * FROM creadores WHERE NOMBRE = '$creador'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
?>
<style>
    .titulosdiv{height:30px;}
</style>
</div>
<div class="f1rst" style="margin-top:0px;">
    <div class="creador">
 <div class="logo">
 	<img src="<?php echo $fila['foto'] ?>" alt="Logo de <?php echo $fila['nombre'] ?>">
 </div>
 <div class="cbody">
 <div class="name">
 <h1><?php echo $fila['nombre'] ?></h1>
<p><?php echo $fila['text'] ?></p>
	</div>
	<br>
		<hr>
		<div class="share">
		    <p>Compartir</p>
   <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flomuchachogames.com%2Fdif%2Fcreators%3Fid&%3D<?php echo $creador ?>&amp;src=sdkpreparse"><i class="fab fa-facebook-square"></i></a><a href="whatsapp://send?text=¡HEY! Mira los juegos que hay en LOMUCHACHOgames - https%3A%2F%2Flomuchachogames.com%2Fdif%2Fcreators%3Fid%3D<?php echo $creador ?>&amp;src=sdkpreparse" data-action="share/whatsapp/share"><i class="fab fa-whatsapp-square"></i></a>
</div>
	<br>
<div class="titulosdiv">
                <h1 class='titulos'>Juegos de <?php echo $fila['nombre']?></h1>
            </div>
            <div class="row" id="e5ylol">
                <?php
                $consulta = "SELECT * FROM `juegos` WHERE creador = '$creador' ORDER BY `id` DESC LIMIT 25";
                $datos = $conn->query($consulta);
                while ($fila = mysqli_fetch_array($datos)) {
                    echo '
                <div class="por3">
                  <div class="mi4mor">
                    <div class="cr3ac">
                        <span class="tm4m4">
                    <a href="' . $fila['link'] .'">
                   <img src="../' . $fila['texto'] . '">
                    </a>
                      </span>
                    </div>
                    <div class="pe3ro">
                        <div class="ch1nguencha">
                            <a class="p3t3"></a> 
                            <div class="text-target">
                                <div class="sub-text">
                                    <div class="sub-text2">
                                        <div class="intra-text">
                                            <div class="namegame">';
                    echo '<a href="' . $fila['link'] . '"><div class="title">' . $fila['nombre'] . " </div></a>";
                    echo '  <div class="namegame2">
                                                </div>
                                            </div>
                                            <div class="tamaño">
                                                <a href="' . $fila['link'] . '" class="tamaño2" style="color:black;"><div>' . $fila['tamano'] . '</div></a>
                                                <div class="namegame2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>';
                }
                ?> 
            </div>
 </div>
 </div>
</div>
</body>
</html>