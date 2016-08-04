<?php

class RutaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $ruta = new Ruta($this->adapter);

        //Conseguimos todos los usuarios
      $allrut = $ruta->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("Ruta/admin", array("allrut" => $allrut));
       
    }
    public function borrarRuta() {
        if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];

            $Ruta = new Ruta($this->adapter);
            $Ruta->deleteBy("Cod_ruta", $Cod_ruta);
        }
        $this->redirect("Ruta", "admin");
    }
    public function viewRuta(){
         if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];
            
            $Rutas = new Ruta($this->adapter);
            $Ruta = $Rutas->getById($Cod_ruta,"Cod_ruta");
            
            $this->view("Ruta/view", array(
                "Ruta"=>$Ruta
            ));
            
        }
     }

    public function crearRuta() {
        if (isset($_POST["CodRuta"])) {

            //Creamos un usuario
            $Ruta = new Ruta($this->adapter);
            $Ruta->setCod_ruta($_POST["CodRuta"]);
            $Ruta->setOrigen_barrio_id($_POST["FkOrBarrio"]);
            $Ruta->setDestino_barrio_id($_POST["FkDesBarrio"]);
            
            $save = $Ruta->save();
            $this->redirect("Ruta", "admin");
        }
        else{
           $barrio= new Barrio($this->adapter);
           $barrios= $barrio->getAll("id_barrio");
           
           
             
             $this->view("Ruta/crear", array("allFkbarrio"=>$barrios));
             
        }
        //$this->redirect("Articulos", "index");
        $this->view("Ruta/crear", array());
    }
public function modificarRuta() {
        if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];

            $rutas = new Ruta($this->adapter);
            $ruta = $rutas->getById($Cod_ruta, "Cod_ruta");
            
            $barrio=new Barrio($this->adapter);
            $ba=$barrio->getAll("id_barrio");
            $this->view("Ruta/Update", array("ruta" => $ruta,
                "barrio"=>$ba));
        }
    }

    public function actualizarRuta() {
        
        if (isset($_POST["Cod_ruta"])) {
echo "tambien";
            $Cod_ruta = isset($_POST["Cod_ruta"]) ? $_POST["Cod_ruta"] : "";
            $Origen_barrio_id = isset($_POST["Origen_barrio_id"]) ? $_POST["Origen_barrio_id"] : "";
            $Destino_barrio_id = isset($_POST["Destino_barrio_id"]) ? $_POST["Destino_barrio_id"] : "";

            $ruta= new Ruta($this->adapter);
            $ruta->setCod_ruta($Cod_ruta);
            $ruta->setOrigen_barrio_id($Origen_barrio_id);
            $ruta->setDestino_barrio_id($Destino_barrio_id);
            
            $update = $ruta->update();
           // print_r($update);
           $this->redirect("Ruta", "admin");
        } 
        $this->view("Ruta/Update", array());
    }
}
