<!DOCTYPE html>
<html lang="es">
    <head>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
     <?php 
     echo '<title>' . $title . '</title>
     <meta name="description" content="' . $description . '"/>
     <meta name="keywords" content="' . $key . '">'.
     $anothermeta;
     ?>
     
     <!-- Metadata -->  
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<meta charset="UTF-8"/>
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <meta name="author" content="LoMuchacho">
        <meta name="robots" content="all" />
        
        <link rel="canonical" href="<?php echo $link ?>"/>
        <link rel="apple-touch-icon" href="https://lomuchachogames.com/fotos/LOMUCHACHOgames.png">
        <link rel="sitemap" type="application/xml" title="Sitemap" href="https://pc.lomuchachogames.com/sitemap.xml" />
        <link rel="icon" type="image/png" href="https://lomuchachogames.com/fotos/LOMUCHACHOgames.png"/>
        
        <meta property="og:title" content="<?php echo $title ?>"/>
		<meta property="og:description" content="<?php echo $description?>" />
		<meta property="og:url" content="<?php echo $link?>" />
        <meta property="og:site_name" content="LOMUCHACHOgames PC"/>
		<meta property="og:locale" content="es_ES"/>
		<meta property="og:type" content="website"/>
		<meta property="og:image" content="https://lomuchachogames.com/fotos/LOMUCHACHOgames.png" />
		
       <!--  Todos los CSS -->
   <link href="https://pc.lomuchachogames.com/css/general.css?v=1.3" rel="stylesheet">
       
       <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118219919-18"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-118219919-18');
</script>
</head>