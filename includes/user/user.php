<?php 
 
include 'conectdb.inc.php';
class User extends DB{
    private $usuario;
    private $username;
    public function userExists($usuario, $contrasena){
        $md5pass = md5($contrasena);
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :usuario AND contrasena = :contrasena');
        $query->execute(['usuario' => $usuario, 'contrasena' => $md5pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($usuario){
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :user');
        $query->execute(['user' => $usuario]);
        
        foreach ($query as $currentUser) {
            $this->usuario = $currentUser['usuario'];
            $this->username = $currentUser['username'];
        }
    }
    public function getNombre(){
        return $this->usuario;
    }
    public function getUsuario(){
        return $this->username;
    }
}
?>