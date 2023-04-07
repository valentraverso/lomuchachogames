 <div>
            <script>
                function cambio(el){
            if(el.className == "menu"){
                el.className = "menu clicked";
                document.getElementById('nav').className = 'show';
            }else{
                el.className = "menu";
                  document.getElementById('nav').className = '';
            }
        }
        </script>
                    <div class="menu" onclick="cambio(this)"> <span></span> </div>
                    <nav id="nav">
                        <ul class="main">
                        <li class="primarios"><a class="primarios" href="https://lomuchachogames.com"><div class="iconos"><i class="fas fa-home"></i></div><span><b>Home</b></span></a></li>
                        <hr>
                             <li class="primarios"><a class="primarios" href="https://lomuchachogames.com/juegos"><div class="iconos"><i class="fas fa-gamepad"></i></div><span><b>Juegos</b></span></a></li>
                            <li><a class="secundarios" href="https://lomuchachogames.com/juegos/categorias/accion">Accion</a></li>
                            <li><a class="secundarios"  href="https://lomuchachogames.com/juegos/categorias/aventura">Aventura</a></li>
                            <li><a class="secundarios"  href="https://lomuchachogames.com/juegos/categorias/casual">Casual</a></li>
                            <li><a class="secundarios" href="https://lomuchachogames.com/juegos/categorias/simulacion">Simulacion</a></li>
                            <li><a class="secundarios" href="https://lomuchachogames.com/juegos/categorias/estrategia">Estrategia</a></li>
                            <li><a class="secundarios" href="https://lomuchachogames.com/juegos/categorias/hack">Hack</a></li>
                            <li><a class="secundarios" href="https://lomuchachogames.com/juegos/categorias/deportes">Deportes</a></li>
                        <hr>
                              <li class="primarios"><a class="primarios" href="https://lomuchachogames.com/apps"><div class="iconos"><i class="fas fa-mobile"></i></div><span><b>Apps</b></span></a></li>
                            <li><a class="secundarios" href="https://lomuchachogames.com/apps/categorias/musica.php">Musica</a></li>
                            <li><a class="secundarios"  href="https://lomuchachogames.com/apps/categorias/comunicacion.php">Comunicacion</a></li>
                            <li><a class="secundarios"  href="https://lomuchachogames.com/apps/categorias/citas.php">Citas</a></li>
                            <li><a class="secundarios" href="https://lomuchachogames.com/apps/categorias/compras.php">Compras</a></li>
                            <li><a class="secundarios" href="https://lomuchachogames.com/apps/categorias/entretenimiento.php">Entretenimiento</a></li>
                 <li><a class="secundarios" href="https://lomuchachogames.com/apps/categorias/fotografia.php">Fotografia</a></li>   
                 <hr>
                 <li class="primarios"><a class="primarios" href="https://pc.lomuchachogames.com"><div class="iconos"><i class="fas fa-desktop"></i></div><span><b>PC</b></span></a></li>
</ul>
                    </nav>
                <header class="linita">
                      <form action="https://lomuchachogames.com/dif/link" autocomplete="off" method="GET">
        <div class="searcher">
         <i class="fa fa-search"></i>
                <input type="text" name="buscajuego" class="searone" placeholder="LOMUCHACHOgames" value="<?php if(!empty($res)){echo $res;}?>">
        </div>
    </form>
       </header>
    </div>