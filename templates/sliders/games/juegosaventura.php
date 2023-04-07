        <?php
        echo " 
                    <div class=\"titulosdiv\">
        <p class='titulos' >Entra en la aventura</p>
            </div>
        <div class=\"row\" id=\"e5ylol\">";
                $consulta = "SELECT * FROM `juegos` WHERE categoria LIKE 'aventura%' ORDER BY RAND() LIMIT 25";
        $datos = $conn->query($consulta);
        while ($fila = mysqli_fetch_array($datos)) {
                               echo '
                <div class="por3">
                  <div class="mi4mor">
                    <div class="cr3ac">
                        <span class="tm4m4">
                    <a href="' . $fila['link'] .'">
                   <img src="' . $fila['texto'] . '" alt="Descargar '.$fila['nombre'].'">
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
        echo "</div>";
        ?> 