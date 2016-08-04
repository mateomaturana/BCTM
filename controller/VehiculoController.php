<?php

class VehiculoController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $Vehiculo = new Vehiculo_Transporte($this->adapter);

        //Conseguimos todos los usuarios
      $allVeh = $Vehiculo->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("Vehiculo/admin", array("allVeh" => $allVeh));
       
    }
public function borrarVehiculo() {
        if (isset($_GET["id_vehiculo"])) {
            $id_vehiculo = (int) $_GET["id_vehiculo"];

            $Vehiculo = new Vehiculo_Transporte($this->adapter);
            $Vehiculo->deleteBy("id_vehiculo", $id_vehiculo);
        }
        $this->redirect("Vehiculo", "admin");
    }
    public function viewVehiculo(){
         if (isset($_GET["id_vehiculo"])) {
            $id_vehiculo = (int) $_GET["id_vehiculo"];
            
            $Vehiculos = new Vehiculo_Transporte($this->adapter);
            $Vehiculo = $Vehiculos->getById($id_vehiculo,"id_vehiculo");
            
            $this->view("Vehiculo/view", array(
                "Vehiculo"=>$Vehiculo
            ));
            
        }
     }
 public function modificarVehiculo_transporte() {
        if (isset($_GET["id_vehiculo"])) {
            $id_vehiculo  = (int) $_GET["id_vehiculo"];

            $vehiculo_transportes = new Vehiculo_Transporte($this->adapter);
            $vehiculo_transporte = $vehiculo_transportes->getById($id_vehiculo, "id_vehiculo");
            
            $empresa=new EmpresaTransportadora($this->adapter);
            $em=$empresa->getAll("Nit_empresa");
            $this->view("Vehiculo/Update", array("vehiculo_transporte" => $vehiculo_transporte,
                "empresa"=>$em));
        }
    }

    public function actualizarVehiculo_transporte() {
        
        if (isset($_POST["Placa_vehiculo"])) {
            
            $id_vehiculo = isset($_POST["id_vehiculo"]) ? $_POST["id_vehiculo"] : "";
            $Placa_vehiculo = isset($_POST["Placa_vehiculo"]) ? $_POST["Placa_vehiculo"] : "";
            $Activo = isset($_POST["Activo"]) ? $_POST["Activo"] : "";
            $Tipo_vehiculo = isset($_POST["Tipo_vehiculo"]) ? $_POST["Tipo_vehiculo"] : "";
            $cupo_vehiculo = isset($_POST["cupo_vehiculo"]) ? $_POST["cupo_vehiculo"] : "";
            $fk_nit_empresa = isset($_POST["fk_nit_empresa"]) ? $_POST["fk_nit_empresa"] : "";
            

            $vehiculo_transporte= new Vehiculo_Transporte($this->adapter);
            $vehiculo_transporte->setid_vehiculo($id_vehiculo);
            $vehiculo_transporte->setPlaca_vehiculo($Placa_vehiculo);
            $vehiculo_transporte->setActivo($Activo);
            $vehiculo_transporte->setTipo_vehiculo($Tipo_vehiculo);
            $vehiculo_transporte->setcupo_vehiculo($cupo_vehiculo);
            $vehiculo_transporte->setfk_nit_empresa($fk_nit_empresa);
            
            
            $update = $vehiculo_transporte->update();
           // print_r($update);
           $this->redirect("Vehiculo", "admin");
        } 
        //$this->view("Vehiculo/Update", array());
    }
    public function crearVehiculo() {
        if (isset($_POST["Placa"])) {

      
            $Vehiculo = new Vehiculo_Transporte($this->adapter);
            $Vehiculo->setPlaca_vehiculo($_POST["Placa"]);
            $Vehiculo->setActivo($_POST["Activo"]);
            $Vehiculo->setTipo_vehiculo($_POST["Tipo"]);
            $Vehiculo->setcupo_vehiculo($_POST["cupo"]);
            $Vehiculo->setfk_nit_empresa($_POST["FkNitEmpresa"]);


            $save = $Vehiculo->save();
            //print_r($save);
            
            $this->redirect("Vehiculo", "admin");
        }
        else{
           $empresa= new EmpresaTransportadora($this->adapter);
           $empresas= $empresa->getAll("id_comuna");
           
             $this->view("Vehiculo/crear", array("allFkempresa"=>$empresas));
             
        }
    
        //$this->redirect("Articulos", "index");
        $this->view("Vehiculo/crear", array());
    }

}
