<head>
    <meta name="googlebot" content="noindex">
</head>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/user/user.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/user/usersession.php';
$userSession = new UserSession();
$usuario = new User();
if(isset($_SESSION['usuario'])){
    //echo "hay sesion";
    $usuario->setUser($userSession->getCurrentUser());
    include_once '../templates/admin/bienvenido.php';
}else if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
    
    $userForm = $_POST['usuario'];
    $passForm = $_POST['contrasena'];
    $usuario = new User();
    if($usuario->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $usuario->setUser($userForm);
        include_once '../templates/admin/bienvenido.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once '../templates/admin/login.php';
    }
}else{
    //echo "login";
    include_once '../templates/admin/login.php';
}
?>

