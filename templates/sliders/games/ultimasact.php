        <?php
        echo " 
                    <div class=\"titulosdiv\">
        <p class='titulos' >Últimos juegos y actualizaciones</p>
            </div>
        <div class=\"row\" id=\"e5ylol\">";
        $consult = "SELECT * FROM version as A
INNER JOIN juegos as B
    ON (A.`nombre` = B.`nombre`) ORDER BY A.id DESC LIMIT 25";
        $dato = $conn->query($consult);
       while($fila = mysqli_fetch_array($dato)){
                               echo '
                <div class="por3">
                  <div class="mi4mor">
                    <div class="cr3ac">
                        <span class="tm4m4">
                    <a href="' . $fila['link'] .'">
                   <img src="' . $fila['texto'] . '" alt="Actualizacion '.$fila['nombre'].'">
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
        echo '<div class="por3"></div>';
        echo "</div>";
        ?> 
