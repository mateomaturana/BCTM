<?php

class ComunaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $comuna = new Comuna($this->adapter);

        //Conseguimos todos los usuarios
      $allcom = $comuna->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("Comuna/admin", array("allcom" => $allcom));
       
    }
    public function borrarComuna() {
        if (isset($_GET["id_comuna"])) {
            $id_comuna = (int) $_GET["id_comuna"];
            $Comuna = new Comuna($this->adapter);
            $Comuna->deleteBy("id_comuna", $id_comuna);
        }
        $this->redirect("comuna", "admin");
    }
    public function viewComuna() {
        if(isset($_GET["id_comuna"])){
         $Comuna = new Comuna($this->adapter);
         $id_comuna = (int) $_GET["id_comuna"];
         $Comunas=$Comuna->getById($id_comuna,"id_comuna");
         $this->view("Comuna/View",array ("Comuna"=>$Comunas));
        }
        
    }
public function modificarComuna() {
        if (isset($_GET["id_comuna"])) {
            $id_comuna = (int) $_GET["id_comuna"];

            $comunas = new Comuna($this->adapter);
            $comuna = $comunas->getById($id_comuna, "id_comuna");
            $this->view("Comuna/Update", array("comuna" => $comuna));
        }
    }

    public function actualizarComuna() {
        
        if (isset($_POST["Nombre"])) {
            $id_comuna = isset($_POST["id_comuna"]) ? $_POST["id_comuna"] : "";
            $nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";

            $comuna= new Comuna($this->adapter);
            $comuna->setId($id_comuna);
            $comuna->setNombre($nombre);
            
            $update = $comuna->update();
           // print_r($update);
           $this->redirect("Comuna", "admin");
        } 
        $this->view("Comuna/Update", array());
    }
    public function crearComuna() {
        if (isset($_POST["nombre"])) {

            //Creamos un usuario
            $Comuna = new Comuna($this->adapter);
            $Comuna->setId($_POST["id_comuna"]);
            $Comuna->setNombre($_POST["nombre"]);


            $save = $Comuna->save();
            $this->redirect("comuna", "admin");
        }
        //$this->redirect("Articulos", "index");
        $this->view("comuna/crear", array());
    }

}
