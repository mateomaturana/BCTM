<?php

class UsuarioController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $Usuario = new Usuario($this->adapter);

        //Conseguimos todos los usuarios
      $allUsu = $Usuario->getAllUsers();
      //Cargamos la vista index y le pasamos valores
       $this->view("Usuario/admin", array("allUsu" => $allUsu));
       
    }
     public function borrarUsuario() {
        if (isset($_GET["Dni_usuario"])) {
            $Dni_usuario = (int) $_GET["Dni_usuario"];

            $Usuario = new usuario($this->adapter);
            $Usuario->deleteBy("Dni_usuario", $Dni_usuario);
        }
        $this->redirect("Usuario", "admin");
    }
 public function viewUsuario(){
         if (isset($_GET["Dni_usuario"])) {
            $Dni_usuario = (int) $_GET["Dni_usuario"];
            
            $Usuarios = new usuario($this->adapter);
            $Usuario = $Usuarios->getById($Dni_usuario,"Dni_usuario");
            
            $this->view("Usuario/view", array(
                "Usuario"=>$Usuario
            ));
            
        }
     }
public function modificarUsuario() {
        if (isset($_GET["Dni_usuario"])) {
            $Dni_usuario = (int) $_GET["Dni_usuario"];

            $usuarios = new Usuario($this->adapter);
            $usuario = $usuarios->getById($Dni_usuario, "Dni_usuario");
            
            $barrio=new Barrio($this->adapter);
            $ba=$barrio->getAll("id_barrio");
            
            $this->view("Usuario/Update", array("usuario" => $usuario, "barrio"=>$ba));
        }
    }

    public function actualizarUsuario() {
        
        if (isset($_POST["Nombre"])) {

            $Dni_usuario = isset($_POST["Dni_usuario"]) ? $_POST["Dni_usuario"] : "";
            $Nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";
            $Email = isset($_POST["Email"]) ? $_POST["Email"] : "";
            $Contrasenna = isset($_POST["Contrasenna"]) ? $_POST["Contrasenna"] : "";
            $Fecha_nacimiento = isset($_POST["Fecha_nacimiento "]) ? $_POST["Fecha_nacimiento "] : "";
            $genero = isset($_POST["genero"]) ? $_POST["genero"] : "";
            $fk_id_barrio = isset($_POST["fk_id_barrio"]) ? $_POST["fk_id_barrio"] : "";

            $usuario= new Usuario($this->adapter);
            $usuario->setId($Dni_usuario);
            $usuario->setNombre($Nombre);
            $usuario->setEmail($Email);
            $usuario->setContrasenna($Contrasenna);
            $usuario->setFechaNac($Fecha_nacimiento);
            $usuario->setgenero($genero);
            $usuario->setfk_id_barrio($fk_id_barrio);
            
            $update = $usuario->update();
           // print_r($update);
           $this->redirect("Usuario", "admin");
        } 
        $this->view("Usuario/Update", array());
    }
    public function crearUsuario() {
        if (isset($_POST["nombre"])) {

            //Creamos un usuario
            $usuario = new Usuario($this->adapter);
            $usuario->setId($_POST["Dni"]);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setEmail($_POST["Email"]);
            $usuario->setContrasenna($_POST["Contrasenna"]);
            $usuario->setFechaNac($_POST["Fecha_nac"]);
            $usuario->setGenero($_POST["genero"]);
            $usuario->setFk_id_barrio($_POST["FkBarrio"]);


            $save = $usuario->save();
            $this->redirect("Usuario", "admin");
        }
                else{
           $barrio= new Barrio($this->adapter);
           $barrios= $barrio->getAll("id_barrio");
           
           
             
             $this->view("Usuario/crear", array("allFkbarrio"=>$barrios));
             
        }
        //$this->redirect("Articulos", "index");
        $this->view("Usuario/crear", array());
    }

}
