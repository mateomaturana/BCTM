<?php

class UsuarioRutaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $UsuarioRuta = new UsuarioRuta($this->adapter);

        //Conseguimos todos los usuarios
      $allusrut = $UsuarioRuta->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("UsuarioRuta/admin", array("allusrut" => $allusrut));
       
    }

    public function crearUsuarioRuta() {
        if (isset($_POST["FkCodRuta"])) {

            //Creamos un usuario
            $UsuarioRut = new UsuarioRuta($this->adapter);
            $UsuarioRut->setCod_ruta($_POST["FkCodRuta"]);
            $UsuarioRut->setId($_POST["FkNitusuario"]);
          $UsuarioRut->setfecha_registro(DATE("y-m-d h-i-s"));


            $save = $UsuarioRut->save();
            $this->redirect("UsuarioRuta", "admin");
        }
        else{
           $ruta= new Ruta($this->adapter);
           $rutas= $ruta->getAll("Cod_ruta");
           $usuario= new Usuario($this->adapter);
           $Usuarios= $usuario->getAll("id_comuna");
           
             
             $this->view("UsuarioRuta/crear", array("allFkruta"=>$rutas,"allFkusuario"=>$Usuarios));
             
        }
        //$this->redirect("Articulos", "index");
        $this->view("UsuarioRuta/admin", array());
    }

}

