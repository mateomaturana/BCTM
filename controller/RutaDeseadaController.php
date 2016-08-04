<?php

class RutaDeseadaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $RtaDeseada = new Ruta_Deseada ($this->adapter);

        //Conseguimos todos los usuarios
      $allRtaD = $RtaDeseada->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("RutaDeseada/admin", array("allRtaD" => $allRtaD));
       
    }

    public function crearRutaDeseada() {
        if (isset($_POST["FkOrBarrio"])) {

            //Creamos un usuario
            $RutaD = new Ruta_Deseada($this->adapter);
            $RutaD->setOrigen_barrio_id($_POST["FkOrBarrio"]);
            $RutaD->setDestino_barrio_id($_POST["FkDesBarrio"]);
            $RutaD->setHora_inicio($_POST["HoraIni"]);
            $RutaD->setHora_fin($_POST["HoraFin"]);


            $save = $RutaD->save();
            //print_r($save);
            $this->redirect("RutaDeseada", "admin");
        }
         else{
           $barrio= new Barrio($this->adapter);
           $barrios= $barrio->getAll("id_barrio");
           
           
             
             $this->view("RutaDeseada/crear", array("allFkbarrio"=>$barrios));
             
        }
        //$this->redirect("Articulos", "index");
        $this->view("RutaDeseada/crear", array());
    }

}
