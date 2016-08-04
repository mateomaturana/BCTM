<?php

class BarrioController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $barrio = new Barrio ($this->adapter);

        //Conseguimos todos los usuarios
      $allbar = $barrio->getAllUsers();
      //Cargamos la vista index y le pasamos valores
       $this->view("Barrio/admin", array("allbar" => $allbar));
       
    }
    public function borrarBarrio() {
        if (isset($_GET["id_barrio"])) {
            $id_barrio = (int) $_GET["id_barrio"];

            $Barrio = new Barrio($this->adapter);
            $Barrio->deleteBy("id_barrio", $id_barrio);
        }
        $this->redirect("barrio", "admin");
    }
     public function viewBarrio(){
         if (isset($_GET["id_barrio"])) {
            $id_barrio = (int) $_GET["id_barrio"];
            
            $Barrios = new Barrio($this->adapter);
            $barrios = $Barrios->getById($id_barrio,"id_barrio");
            
            $this->view("Barrio/View", array(
                "barrio"=>$barrios
            ));
            
            
        }
     }
    public function modificarBarrio() {
        if (isset($_GET["id_barrio"])) {
            $id_barrio = (int) $_GET["id_barrio"];

            $barrios = new Barrio($this->adapter);
            $barrio = $barrios->getById($id_barrio, "id_barrio");
            $this->view("Barrio/update", array("barrio" => $barrio));
        }
    }

    public function actualizarBarrio() {
        
        if (isset($_POST["Nombre"])) {

            $id_barrio = isset($_POST["id_barrio"]) ? $_POST["id_barrio"] : "";
            $Nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";
            $Fk_id_comuna = isset($_POST["Fk_id_comuna"]) ? $_POST["Fk_id_comuna"] : "";

            $barrio= new Barrio($this->adapter);
            $barrio->setid_barrio($id_barrio);
            $barrio->setNombre($Nombre);
            $barrio->setFk_id_comuna($Fk_id_comuna);
            
            $update = $barrio->update();
            //print_r($update);
           $this->redirect("Barrio", "admin");
        } 
        $this->view("Barrio/update", array());
    }

    public function crearBarrio() {
        if (isset($_POST["nombre"])) {

            //Creamos un usuario
            $Barrio = new Barrio($this->adapter);
            $Barrio->setNombre($_POST["nombre"]);
            $Barrio->setFk_id_comuna($_POST["fk_id_comuna"]);


            $save = $Barrio->save();
            $this->redirect("barrio", "admin");
        }
        else{
           $comuna= new Comuna($this->adapter);
           $comunas= $comuna->getAll("id_comuna");
           
             $this->view("Barrio/crear", array("allFkcomuna"=>$comunas));
             
        }
   
        //$this->redirect("Articulos", "index");
       
    }

}