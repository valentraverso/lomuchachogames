<?php 
header("Cache-Control: no-cache, must-revalidate");
?>
<!DOCTYPE html>
        <html lang="es">
    <head>
    <!-- SEO  -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta charset="UTF-8"/>
		<meta name="robots" content="all"/>
        <title>LOMUCHACHOgames - Juegos gratis para Android</title>
        <meta name="title" content="Descargar juegos gratis para Android APK + OBB- LOMUCHACHOgames"/>
        <link rel="apple-touch-icon" href="fotos/LOMUCHACHOgames.png">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <link rel="icon" type="image/png" href="fotos/LOMUCHACHOgames.png"/>
        <meta name="description" content="Bienvenido a LOMUCHACHOgames.com , Descargar juegos gratis para Android y apps. El directorio más completo con los mejores juegos para tu celular." property="og:description">
        <meta name="keywords" content="Juegos, juegos para android gratis, apk, obb, android, juegos android,">
                <?php
        $host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
echo "<link rel=\"canonical\" href=\"https://" . $host . $url."\">";
?>
     	<meta property="og:site_name" content="LOMUCHACHOgames"/>
		<meta property="og:locale" content="es_ES"/>
		<meta property="og:title" content="LOMUCHACHOgames - Descarga juegos para Android"/>
		<meta property="og:url" content="https://lomuchachogames.com"/>
		<meta property="og:type" content="website"/>
		<meta property="og:image" content="https://lomuchachogames.com/fotos/LOMUCHACHOgames.png" />
        <!-- Link de otros lugares -->
        <link rel="alternate" href="https://lomuchachogames.com" hreflang="es" />
        <link rel="alternate" hreflang="pt" href="https://br.lomuchachogames.com">
        <link rel="alternate" hreflang="en" href="https://en.lomuchachogames.com">
        <!-- Enlaces de CSS -->
       <link rel="stylesheet" href="https://lomuchachogames.com/css/menu.css" type="text/css">
       <link async rel="stylesheet" href="https://lomuchachogames.com/css/general.css" type="text/css">
        <!-- SCRIPT -->
         <script async src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118219919-1"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \'UA-118219919-1\');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2647877401979307"
     crossorigin="anonymous"></script>
<script type="text/javascript" data-cfasync="false"></script>
    </head>
    <body>
        <?php
        include_once 'includes/conection.php';
        include_once 'templates/menu/menu.php';
        ?>
        <div class='f1rst'>
            <?php
            include_once 'templates/q/bannerindex.php';
            echo '<script data-cfasync="false" type="text/javascript" src="//greatdexchange.com/a/display.php?r=6043782"></script>';
            include_once 'templates/sliders/games/ultimasact.php';
            include_once 'templates/sliders/apps/appsmasvisitadas.php';
            include_once 'templates/sliders/apps/appsrecientes.php';
            include_once 'templates/sliders/trendy.php';
            echo '<script data-cfasync="false" type="text/javascript" src="//greatdexchange.com/a/display.php?r=6043798"></script>';
            include_once "templates/sliders/games/juegosaccion.php";
            include_once 'templates/sliders/games/juegosrandom.php';
            include_once 'templates/sliders/games/juegosmasvisitados.php';
            include_once 'templates/sliders/games/gtas.php';
            include_once 'templates/sliders/games/listado.php';
            include_once "templates/sliders/games/juegosaventura.php";
            include_once 'templates/sliders/apps/musica.php';
                       echo '<script data-cfasync="false" type="text/javascript" src="//greatdexchange.com/a/display.php?r=6043798"></script>';
            ?>
            <div class="our">
            <p><h1>LOMUCHACHOgames - Descargar juegos para Android</h1><br>¡Hola! Bienvenido a LOMUCHACHOgames es esta pagina vas a encontrar miles de juegos y apps gratis para Android. Si sabes descargar e instalar APK y OBB vas a tener una experiencia muy grata en esta web, pero si no sabes tranquilo en nuestro canal de YouTube (LoMuchacho), tenemos un monton de videos tutoriales eseñando como hacer todo el proceso de instalacion.<br></p>
      <p></p>Esperamos disfrutes los juegos que descarges en tu celular y te diviertas mucho. Cualquier consulta podes contactarnos mediante nuestras redes sociales donde estamos siempre acitvos. Muchas Gracias.
      LoMuchacho Corp. Team.</p><p>En esta pagina podes bajar una gran cantidad de juegos para tu celular totalmente gratis, tenemos todas las categorias de juegos, de accion, deportes, simulacion, casual y muchos màs. Ademas, en cada juego de Android podes reportar si hay una actualizacion del mismo, asi estamos siempre actualizados y vos va a poder jugar a lo que vos quieras todo el tiempo.</p><p>Si queres tambien podes seguirnos en nuestras redes sociales, donde todo el tiempo subimos noticias sobre la pagina, cuando subimos alguna app nueva o tambien tutoriales para descargar e instalar APK y OBB</p>
      </div><br><bR>
                    </div>
        <!-- A partir de aca Cualquier codigo-->

        <br>
        <script src="js/trendy.js" defer></script>
        <?php include_once 'templates/header/footer.php';?>
    </body>
</html>