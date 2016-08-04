<?php

class RecomendacionRutaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $Recomendacion = new RecomendacionRuta ($this->adapter);

        //Conseguimos todos los usuarios
      $allRec = $Recomendacion->getAllUsers();
      //Cargamos la vista index y le pasamos valores
       $this->view("RecomendacionRuta/admin", array("allRec" => $allRec));
       
    }
    public function borrarRecomendacionRuta() {
        if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];

            $Recomendacion = new RecomendacionRuta ($this->adapter);
            $Recomendacion->deleteBy("Cod_ruta", $Cod_ruta);
        }
        $this->redirect("RecomendacionRuta", "admin");
    }
     public function viewRecomendacionRuta(){
         if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];
            
            $Recomendacions = new RecomendacionRuta($this->adapter);
            $Recomendacion = $Recomendacions->getById($Cod_ruta,"Cod_ruta");
            
            $this->view("RecomendacionRuta/view", array(
                "Recomendacion"=>$Recomendacion
            ));
            
        }
     }
 public function modificarRecomendacionRuta() {
        if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];

            $recomendacion_rutas = new RecomendacionRuta($this->adapter);
            $recomendacion_ruta = $recomendacion_rutas->getById($Cod_ruta, "Cod_ruta");  
            $recomendacion_ruta=new RecomendacionRuta($this->adapter);
            $usu=$recomendacion_ruta->getAll("Cod_ruta");
            $this->view("RecomendacionRuta/Update", array("recomendacion_ruta" => $recomendacion_ruta,
                "usua"=>$usu));
        }
    }

    public function actualizarRecomendacionRuta() {
        
        if (isset($_POST["Cod_ruta"])) {

            $Cod_ruta = isset($_POST["Cod_ruta"]) ? $_POST["Cod_ruta"] : "";
            $Dni_usuario = isset($_POST["Dni_usuario"]) ? $_POST["Dni_usuario"] : "";
            //$fecha_registro = isset($_POST["fecha_registro"]) ? $_POST["fecha_registro"] : "";
            $Recomendacion = isset($_POST["Recomendacion"]) ? $_POST["Recomendacion"] : "";
            $tags = isset($_POST["tags"]) ? $_POST["tags"] : "";

            $recomendacion_ruta= new RecomendacionRuta($this->adapter);
            $recomendacion_ruta->setCod_ruta($Cod_ruta);
            $recomendacion_ruta->setId($Dni_usuario);
            $recomendacion_ruta->setfecha_registro(DATE("y-m-d h:m:s"));
            $recomendacion_ruta->setRecomendacion($Recomendacion);
            $recomendacion_ruta->settags($tags);
            
            $update = $recomendacion_ruta->update();
           // print_r($update);
           $this->redirect("RecomendacionRuta", "admin");
        } 
        $this->view("RecomendacionRuta/Update", array());
    }
    public function crearRecomendacionRuta() {
        if (isset($_POST["FkCodRuta"])) {

            //Creamos un usuario
            $Recomendacion = new RecomendacionRuta($this->adapter);
            $Recomendacion->setCod_ruta($_POST["FkCodRuta"]);
            $Recomendacion->setId($_POST["FkNitusuario"]);
            $Recomendacion->setRecomendacion($_POST["Recomendacion"]);
            $Recomendacion->settags($_POST["Tags"]);
            $Recomendacion->setfecha_registro(DATE("y-m-d h:i:s"));


            $this->redirect("recomendacionRuta", "admin");

            $save = $Recomendacion->save();
        }
        else{
           $ruta= new Ruta($this->adapter);
           $rutas= $ruta->getAll("Cod_ruta");
           $usuario= new Usuario($this->adapter);
           $Usuarios= $usuario->getAll("Dni_usuario");
           
             
             $this->view("RecomendacionRuta/crear", array("allFkruta"=>$rutas,"allFkusuario"=>$Usuarios));
             
        }
        //$this->redirect("Articulos", "index");
        $this->view("RecomendacionRuta/crear", array());
    }

}

