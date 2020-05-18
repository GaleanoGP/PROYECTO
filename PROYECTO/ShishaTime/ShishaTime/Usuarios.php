<?php


include_once("db.php");
include_once("Usuario.php");
// DAO =  Data Access Object

class Usuarios extends DB{

    private $db;

    public function __construct(){
        $this->db=self::getConexion();
    }

    // funciones CRUD = Create Read Update Delete

    public function crear($u){
        $sql="insert into usuarios (usuario,contrasena,correo,rol) values (?,?,?,?)";
        $usuario=$u->getUsuario();
        $contrasena=$u->getContrasena();
        $correo=$u->getCorreo();
        $rol=$u->getRol();
        $stm=$this->db->prepare($sql);
        $stm->bind_param("ssss",$usuario,$contrasena,$correo,$rol);
        //ejecuta la sentencia
        $stm->execute();
        //cierra la sentencia
        $stm->close();
    }

    public function read($usu){
        $sql="select contrasena,correo,rol from usuarios where usuario=?";
        $stm=$this->db->prepare($sql);
        $stm->bind_param("s",$usu);
        $stm->bind_result($contrasena,$correo,$rol);
        $stm->execute();
        $stm->fetch();
        $stm->close();
        return new Usuario($usu,$contrasena,$correo,$rol);
    }


    public function update($u){
        $sql="update usuarios set contrasena=?,correo=?,rol=? where usuario=?";
        $stm=$this->db->prepare($sql);

        $usuario=$u->getUsuario();
        $contrasena=$u->getContrasena();
        $correo=$u->getCorreo();
        $rol=$u->getRol();

        $stm->bind_param("ssss",$contrasena,$correo,$rol,$usuario);
        //ejecuta la sentencia
        $stm->execute();
        //cierra la sentencia
        $stm->close();
    }
}
