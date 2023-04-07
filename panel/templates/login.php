<head>
    <link rel="stylesheet" href="https://lomuchachogames.com/css/login.css">
</head>
<body>
    <div class="formulario">
<p>¡Hola! Logueate porfavor </p>
<form enctype="multipart/form-data" action="https://admin.lomuchachogames.com/includes/login" method="post">
    <input type="text" name="user"  autocomplete="off" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username"> <br>
    <input type="password" name="password" placeholder="Password"><br>
<?php
          if(isset($_GET['error']))
          switch($_GET['error']){
              case 1:
                  echo "Usuario y/o contaseña equivocados";
          }
            ?><br>
            <input type="submit" class="btn btn-primary"><br><br>
<a href="../" class="volver"><- Volver a LOMUCHACHOgames</a>
<?php if(isset($_POST['usuario'], $_POST['contrasena']))?>
</form>
<div>

