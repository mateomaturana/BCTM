<?php

class BarrioRutaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $BarrioRta = new BarrioRuta($this->adapter);

        //Conseguimos todos los usuarios
      $allBrta = $BarrioRta->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("BarrioRuta/admin", array("allBrta" => $allBrta));
       
    }
    public function borrarBarrioRuta() {
        if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];

            $BarrioRuta = new barrioruta($this->adapter);
            $BarrioRuta->deleteBy("Cod_ruta", $Cod_ruta);
        }
        $this->redirect("BarrioRuta", "admin");
    }
     public function viewBarrioRuta(){
         if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];
            
            $BarrioRutas = new barrioruta($this->adapter);
            $barrioRuta = $BarrioRutas->getById($Cod_ruta,"Cod_ruta");
            
            $this->view("BarrioRuta/view", array(
                 "barrioRuta"=>$barrioRuta
            ));
            
        }
     }
      public function modificarBarrioRuta() {
        if (isset($_GET["Cod_ruta"])) {
            $Cod_barrio = (int) $_GET["Cod_ruta"];

            $barriorutas = new BarrioRuta($this->adapter);
            $barrioruta = $barriorutas->getById($Cod_barrio, "Cod_ruta");
            $this->view("BarrioRuta/Update", array("barrioruta" => $barrioruta));
        }
    }

    public function actualizarBarrioRuta() {
        
        if (isset($_POST["Cod_ruta"])) {

            $Cod_ruta = isset($_POST["Cod_ruta"]) ? $_POST["Cod_ruta"] : "";
            $id_barrio = isset($_POST["id_barrio"]) ? $_POST["id_barrio"] : "";
            $cod_ruta_original=isset($_POST["Cod_ruta_Origen"]) ? $_POST["Cod_ruta_Origen"] : "";

            $barrioruta= new BarrioRuta($this->adapter);
            $barrioruta->setCod_ruta($Cod_ruta);
            $barrioruta->setid_barrio ($id_barrio);
            
            $update = $barrioruta->update($cod_ruta_original);
            
           print_r($update);
           //$this->redirect("BarrioRuta", "admin");
        } 
        //$this->view("BarrioRuta/Update", array());
    }


    public function crearBarrioRuta() {
        if (isset($_POST["fk_cod_ruta"])) {

            //Creamos un usuario
            $BarRut = new BarrioRuta($this->adapter);
            $BarRut->setCod_ruta($_POST["fk_cod_ruta"]);
            $BarRut->setid_barrio($_POST["fk_id_barrio"]);


            $save = $BarRut->save();
            $this->redirect("BarrioRuta", "admin");
        }
        else{
            $barrio= new Barrio($this->adapter);
           $barrios= $barrio->getAll("id_barrio");
            $ruta= new Ruta($this->adapter);
           $rutas= $ruta->getAll("Cod_ruta");
           
             $this->view("BarrioRuta/crear", array("allFkbarrio"=>$barrios,"allFkruta"=>$rutas));
              
        }
        
           
           
            
              
        
        //$this->redirect("Articulos", "index");
       
    }

}

