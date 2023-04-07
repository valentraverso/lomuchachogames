<ul class="listado">
    <p class="titulos">MOD APK</p>
        <?php
        $consulta = "SELECT * FROM juegos WHERE categoria LIKE 'hack%' ORDER BY RAND() LIMIT 5";
        $datos = $conn->query($consulta);
        while ($fila = mysqli_fetch_array($datos)) {
        ?>
    <a href="<?php echo $fila['link']?>"><li><div class="in-listado"><img src="<? echo $fila['texto'];?>"></div><div class="listado-text"><span><b><? echo $fila['nombre'];?></b></span><br><span><? echo $fila['creador'];?></span><br><span><? echo $fila['version'];?></span></div></li></a>
    <?php }?>
</ul>