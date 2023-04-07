<?php
include_once '../includes/conection.php';
?>
<head>
    <link rel="stylesheet" href="../css/bienvenido.css?v=1">
    <title>Admin Page - LOMUCHACHOgames</title>
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
</head>
<body>
    <script>
  function agregar(){
      var add = document.querySelector('.add');
          if(add.id == "close"){
          add.id = "open";
          }else{
              add.id = "close";
          }
  }  
</script>
<?php include_once 'menu/menu.php'; ?>
        <div class="dios">
<?php
include_once '../include/user.php';
echo '<div class="box tresmedio"><div class="frases">';
//Palabras random
$arrX = ["Lindo dia para programar", $usuario->getNombre(). " es la persona mas linda del mundo","LOMUCHACHOgames lugar de buena gente", "La CLAVE no es ser el mejor, sino tener el mejor equipo", "Si no hace estupideces cunado eres joven, no vas a tener porque reir cuando seas viejo", "El diablo susurro en mi oido: \"No eres los suficientemente fuerte para resistir la tormenta\". Hoy le susurre al diablo \"Yo soy la tormenta\"", "Apunta a la luna si fallas daras en una estrella", "Recorda siempre porque empezamos a hacer lo que hacemos y como terminaremos si somos los mejores en lo que hacemos.", "Dame 6 horas para cortar un arbol y pasare las primeras 4 afilando el hacha. Abraham Lincoln", "\"Voy a volar\" dijo el gusano. Todos se rieron menos la mariposa.", "Mi riqueza es vivir por siempre", "No siempre necesitas un plan. A veces solo necesitas huevos.", "Puedes tener mas talento que yo, podras ser mas inteligente que yo, pero si ambos subimos a una cinta de correr, solo hay dos opciones: o tu te bajas primero o yo voy a morir en la cinta.", "Despierta antes de que tu despertador suene, cuando lo haga dile: \"Eres muy lento para mi\"", "Mientras alguna personas vinieron al mundo a llorar, otras vinimos a vender pañuelos.", "No se cual es la receta para el exito, pero huevos seguro lleva.", "Habitos viejos no daran nuevos resultados.", "Me cerraron tantas puertas que no me quedo mas opcion que trabajar para comprar el edificio.", "O millonario o nada", "Vistete bien tienes una cita con el exito.", "El tiempo es dinero y el dinero mueve al mundo.", "Dos titanes siempre crean algo grande."];
$randIndex = array_rand($arrX);
echo $arrX[$randIndex];
?>
            <br>
</div>
<div class="objetivos">
    <span class="obj">Objetivo</span><br>
    <?php
    $progreso = "SELECT * FROM apps";
$con = $conn->query($progreso);
$contado = mysqli_num_rows($con);
$progreso2 = "SELECT * FROM juegos";
$con2 = $conn->query($progreso2);
$contado2 = mysqli_num_rows($con2);
$totalprogress = $contado + $contado2;
?>
<span><?php echo $totalprogress?>/600</span><br>
			<progress id="html5" max="600"></progress>
		<script>
		    var progreso = document.getElementById('html5');
		    progreso.value = <?php echo $totalprogress?>;
		</script>
</div>
</div>
<?php
$carg = "SELECT * FROM pendiente WHERE (tipo = 'juego') OR (tipo = 'app') ORDER BY pendiente.id DESC LIMIT 15";
$cargda = $conn->query($carg);
?>
<div class="box">
        <h3>Pendientes<span onclick="agregar()" style="font-size:15px;font-weight:100;">  + Agregar</span></h3>
        <div class="add" id="close">
            <form action="https://lomuchachogames.com/includes/pendiente?auth=upload" method="post">
                <input type="text" name="name" placeholder="nombre" autocomplete="off">
                <select name="tipo">
                    <option>Elegir...</option>
                    <option value="juego">Juego</option>
                    <option value="app">App</option>
                    <option value="tarea">Tarea</option>
                </select>
                <input type="submit" value="agregar" class="btt">
            </form>
        </div>
        <table class="table">
         <thead class="thead-dark">
          <tr>
           <th scope="col">Juego</th>
           <th scope="col">Tipo</th>
           <th scope="col">Opciones</th>
            </tr>
         </thead>
        <tbody>
           <?php
           while($info  = mysqli_fetch_array($cargda)){
         echo '       <tr>
      <td>
         '.$info['nombre'].'
        </td>
        <td>
        '.$info['tipo'].'
        </td>
          <td>
        <a href="https://lomuchachogames.com/includes/pendiente?auth=delete&act='.$info['id'].'"><button class="btn btn-primary">Subido</button></a>
        </td>
        </tr>';
           }
           ?>
        </tbody>
        </table>
</div>
<?php
$carga = "SELECT * FROM report ORDER BY report.id DESC LIMIT 15";
$cargdat = $conn->query($carga);
?>
<div class="box">
    <h3>Reporte de actualizaciones</h3>
<p>Stocker a movido esto al nuevo administrador universal :) para verlo has click en el siguiente enlace. <a href="https://admin.lomuchachogames.com/android">CLICK</a></p>
</div>
    </div>
    </div>
<br>
</body>

