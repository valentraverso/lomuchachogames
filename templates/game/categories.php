<!DOCTYPE html>
<html lang="es">
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/game.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menuentre.php';
?>

    <?php
    if(!empty($categoria)){
        $consulta = "SELECT * FROM `$tipe` WHERE categoria LIKE '%$categoria%' ORDER BY id DESC";
    }else{
    $consulta = "SELECT * FROM clicks as A
INNER JOIN $tipe as B
    ON (A.url = B.link) ORDER BY A.int DESC";
    }
    $datos = $conn->query($consulta);
    echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- Simil Productos Rectangulo --> <ins class="adsbygoogle" style="display:block;" data-ad-client="ca-pub-7128213841177240" data-ad-slot="9434896577" data-ad-format="auto" data-full-width-responsive="true"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
    <div class="tod4 deatres">';
    while ($fila = mysqli_fetch_array($datos)) {
        echo '
                         <div class="cubardou">
                         <a href="'.$fila['link'].'">
         <div class="narigon">
                    <div class="afadf">
                        <img src="' . $fila['texto'] . '" alt="Descargar '.$fila['nombre'].'">
                    </div>
                    <div class="isjubfcopv_">
       <span class="agafh">' . $fila['nombre'] . '</span>
                                            <div class="tamanoasdfc">
                                                <div>' . $fila['tamano'] . '</div>
                                                </div></div></div>
                </a>
                </div>';
    }
    echo "</div>";
    ?>
</body>
</html>