<head>
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="formulario">
<p>¡Hola! Logueate porfavor </p>
<form enctype="multipart/form-data" action="" method="post">
    <input type="text" name="usuario"  autocomplete="off" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username"> <br>
    <input type="password" name="contrasena" placeholder="Password"><br>
<?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
            ?><br>
            <input type="submit" class="btn btn-primary"><br><br>
<a href="../" class="volver"><- Volver a LOMUCHACHOgames</a>
<?php if(isset($_POST['usuario'], $_POST['contrasena']))?>
</form>
<div>

