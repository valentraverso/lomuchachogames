        <?php
        $ido = "SELECT COUNT(*) as total FROM pendiente WHERE tipo = 'tarea'";
        $idoc = $conn->query($ido);
        $canay = mysqli_fetch_array($idoc);
        if($canay['total'] >= 1){
            $t = $canay['total'];
        }else{
            $t = "";
        }
        ?>
        <div id="lateral">
            <div class="user">
            <?php echo $usuario->getUsuario();?><br>
            <a id="logout" href="https://lomuchachogames.com/includes/user/logout.php">Cerrar sesion</a><br>
            </div>
            <a href="../admin/" rel="nofollow" class="crear"><i class="fa fa-home"></i><span class="k">Home</span></a><br>
            <a href="../admin/juegos?pagina=1" rel="nofollow" class="crear"><i class="fa fa-gamepad"></i><span class="k">Juegos</span></a><br>
            <a href="../admin/apps?pagina=1" rel="nofollow" class="crear"><i class="fas fa-mobile-alt"></i><span class="k">Apps</span></a><br>
            <a href="../admin/creador" rel="nofollow" class="crear"><i class="fa fa-cloud-upload-alt"></i><span class="k">Crear juegos</span></a><br>
            <a href="../admin/crearapp" rel="nofollow" class="crear"><i class="fa fa-cloud-upload-alt"></i><span class="k">Crear apps</span></a><br>
            <a href="../admin/creators" rel="nofollow" class="crear"><i class="fas fa-user-check"></i><span class="k">Creadores</span></a><br>
            <a href="https://lomuchachogames.com/includes/autositemap" rel="nofollow" class="crear"><i class="fa fa-map-marked-alt"></i><span class="k">Sitemap</span></a><br>
            <a href="../admin/works" rel="nofollow" class="crear"><i class="fa fa-tasks"></i><span class="k">Task</span></a><?php echo '<span class="d">'.$t.'</span>';?><br>
            <a href="https://lomuchachogames.com/admin/banner" rel="nofollow" class="crear"><i class="fa fa-image"></i><span class="k">Cambiar Banner</span></a><br>
            <a href='../' class="crear"><i class="fa fa-long-arrow-alt-left"></i><span class="k">Volver al HOME</span></a><br>
        </div>