<?php

class RutaEmpresaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $RutaEmpresa = new Ruta_empresa ($this->adapter);

        //Conseguimos todos los usuarios
      $allRutemp = $RutaEmpresa->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("RutaEmpresa/admin", array("allRutemp" => $allRutemp));
       
    }
    public function borrarRutaEmpresa() {
        if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];

            $RutaEmpresa = new Ruta_empresa($this->adapter);
            $RutaEmpresa->deleteBy("Cod_ruta", $Cod_ruta);
        }
        $this->redirect("RutaEmpresa", "admin");
    }
     public function viewRutaEmpresa(){
         if (isset($_GET["Cod_ruta"])) {
            $Cod_ruta = (int) $_GET["Cod_ruta"];
            
            $RutaEmpresas = new Ruta_empresa($this->adapter);
            $RutaEmpresa = $RutaEmpresas->getById($Cod_ruta,"Cod_ruta");
            
            $this->view("RutaEmpresa/view", array(
                "RutaEmpresa"=>$RutaEmpresa
            ));
            
        }
     }


    public function crearRutaEmpresa() {
        
        if (isset($_POST["FkRuta"])) {

            //Creamos un usuario
            $RutaEmp = new Ruta_empresa($this->adapter);
            $RutaEmp->setCod_ruta($_POST["FkRuta"]);
            $RutaEmp->setNit_empresa($_POST["FkNitEmpresa"]);
            $RutaEmp->setOrigen_barrio_id($_POST["FkOrBarrio"]);
            $RutaEmp->setDestino_barrio_id($_POST["FkDesBarrio"]);
            $RutaEmp->setDuracion_aproximada($_POST["DuracionAprox"]);
            $RutaEmp->setHora_inicio($_POST["HoraIni"]);
            $RutaEmp->setHora_fin($_POST["HoraFin"]);


            $save = $RutaEmp->save();
           
            $this->redirect("RutaEmpresa", "admin");
        }
         else{
           $barrio= new Barrio($this->adapter);
           $barrios= $barrio->getAll("id_barrio");
           $ruta=new Ruta($this->adapter);
           $rutas=$ruta->getAll("Cod_ruta");
           $empresa= new EmpresaTransportadora($this->adapter);
           $empresas= $empresa->getAll("id_comuna");
             
             $this->view("RutaEmpresa/crear", array("allFkbarrio"=>$barrios,"allFkruta"=>$rutas,"allFkempresa"=>$empresas));
             
        }
        //$this->redirect("Articulos", "index");
        $this->view("RutaEmpresa/crear", array());
    }

}



