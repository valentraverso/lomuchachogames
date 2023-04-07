<?php include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php'; ?>
<head>
    <link rel="stylesheet" href="../css/bienvenido.css">
    <title>Tareas - LOMUCHACHOgames</title>
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
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'menu/menu.php'; ?>
        <div class="dios">
<div class="report">
        <h3>Tareas pendientes <span onclick="agregar()">+ Agregar Recordatorio</span></h3>
        <div class="add" id="close">
            <form action="https://lomuchachogames.com/includes/pendiente?auth=upload" method="post">
                <input type="text" name="name" placeholder="nombre" autocomplete="off">
                <select name="tipo">
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
$pep = "SELECT * FROM pendiente WHERE tipo = 'tarea' ORDER BY pendiente.id DESC";
$cargda = $conn->query($pep);
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
            </div>
            