<?php
    $recibir = "SELECT * FROM clicks as A
INNER JOIN juegos as B
    ON (A.url = B.link) ORDER BY A.int DESC LIMIT 25";
    $dato = mysqli_query($conn, $recibir);

        echo " 
                    <div class=\"titulosdiv\">
        <p class='titulos'>Los mas visitados</p>
            </div>
        <div class=\"row\" id=\"e5ylol\">";
    
    while($fila = mysqli_fetch_array($dato)) {
               echo '           
                <div class="por3">
                  <div class="mi4mor"> 
                    <div class="cr3ac">
                    <a href="'.$fila['link'].'">
                        <span class="tm4m4">';
            echo '<img src="' . $fila['texto'] . '" alt="Descargar '.$fila['nombre'].'">';     
            echo ' </span>
                    </div>
                    </a>
                    <div class="pe3ro">
                        <div class="ch1nguencha">
                            <a class="p3t3"></a> 
                            <div class="text-target">
                            <a href="'.$fila['link'].'">
                                <div class="sub-text">
                                    <div class="sub-text2">
                                        <div class="intra-text">
                                            <div class="namegame">';
            echo '<a href="#"><div class="title">' . $fila['nombre'] . " </div></a>";
            echo '  <div class="namegame2">
                                                </div>
                                            </div>
                                            <div class="tamaño">
                                                <a href="#" class="tamaño2" style="color:black;"><div>'.$fila['tamano'].'</div></a>
                                                <div class="namegame2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                       </div>
                    </div>
                </div>
            </div>';
        }
        echo "</div>";
        ?> 