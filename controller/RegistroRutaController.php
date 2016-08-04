<?php

class RegistroRutaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $RegistroRuta = new Registro_ruta($this->adapter);

        //Conseguimos todos los usuarios
      $allRgt = $RegistroRuta->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("RegistroRuta/admin", array("allRgt" => $allRgt));
       
    }
    public function borrarRegistroRuta() {
        if (isset($_GET["Codigo_registroRuta"])) {
            $Codigo_registroRuta = (int) $_GET["Codigo_registroRuta"];

            $RegistroRuta = new Registro_Ruta($this->adapter);
            $RegistroRuta->deleteBy("Codigo_registroRuta", $Codigo_registroRuta);
        }
        $this->redirect("RegistroRuta", "admin");
    }
     public function viewRegistroRuta(){
         if (isset($_GET["Codigo_registroRuta"])) {
            $Codigo_registroRuta = (int) $_GET["Codigo_registroRuta"];
            
            $RegistroRutas = new Registro_ruta($this->adapter);
            $RegistroRuta = $RegistroRutas->getById($Codigo_registroRuta,"Codigo_registroRuta");
            
            $this->view("RegistroRuta/view", array(
                "RegistroRuta"=>$RegistroRuta
            ));
            
        }
     }
public function modificarRegistroRuta() {
        if (isset($_GET["Codigo_registroRuta"])) {
            $Codigo_registroRuta = (int) $_GET["Codigo_registroRuta"];

            $registro_rutas = new Registro_Ruta($this->adapter);
            $registro_ruta = $registro_rutas->getById($Codigo_registroRuta, "Codigo_registroRuta");
            
            $ruta= new Ruta($this->adapter);
            $ru=$ruta->getAll("Cod_ruta");
            
            $empresa = new ControladorEmpresa($this->adapter);
            $empre=$empresa->getAll("Dni_controlador");
            
            $conducto= new Conductor($this->adapter);
            $con=$conducto->getAll("Dni_conductor");
            
            $vehiculo=new Vehiculo_transporte($this->adapter);
            $vehi=$vehiculo->getAll("id_vehiculo");
            $this->view("RegistroRuta/Update", array("registro_ruta" => $registro_ruta,
                "ruta"=>$ru,
                "conductor"=>$con,
                "empresa"=>$empre,
                "vehiculo"=>$vehi));
        }
    }

    public function actualizarRegistroRuta() {
        
        if (isset($_POST["Fecha_salida"])) {

            $Codigo_registroRuta = isset($_POST["Codigo_registroRuta"]) ? $_POST["Codigo_registroRuta"] : "";
            $Fecha_salida = isset($_POST["Fecha_salida"]) ? $_POST["Fecha_salida"] : "";
            $Fecha_llegada = isset($_POST["Fecha_llegada"]) ? $_POST["Fecha_llegada"] : "";
            $fk_cod_ruta = isset($_POST["fk_cod_ruta"]) ? $_POST["fk_cod_ruta"] : "";
            $id_vehiculo = isset($_POST["id_vehiculo"]) ? $_POST["id_vehiculo"] : "";
            $fk_id_conductor = isset($_POST["fk_id_conductor"]) ? $_POST["fk_id_conductor"] : "";
            $fk_id_contEmpresa = isset($_POST["fk_id_contEmpresa"]) ? $_POST["fk_id_contEmpresa"] : "";

            $registro_ruta= new Registro_Ruta($this->adapter);
            $registro_ruta->setCodigo_registroRuta($Codigo_registroRuta);
            $registro_ruta->setFecha_salida($Fecha_salida);
            $registro_ruta->setFecha_llegada($Fecha_llegada);
            $registro_ruta->setfk_cod_ruta($fk_cod_ruta);
            $registro_ruta->setid_vehiculo($id_vehiculo);
            $registro_ruta->setfk_id_conductor($fk_id_conductor);
             $registro_ruta->setfk_id_contEmpresa($fk_id_contEmpresa);
            
            $update = $registro_ruta->update();
           //print_r($update);
           $this->redirect("RegistroRuta", "admin");
        } 
        $this->view("RegistroRuta/Update", array());
    }
    public function crearRegistroRuta() {
        if (isset($_POST["FkCodRuta"])) {

            //Creamos un usuario
            $Registro = new Registro_ruta($this->adapter);
            
            $Registro->setFecha_salida($_POST["Fechasal"]);
            $Registro->setFecha_llegada($_POST["FechaLleg"]);
            $Registro->setfk_cod_ruta($_POST["FkCodRuta"]);
            $Registro->setId_vehiculo($_POST["FkVehiculo"]);
            $Registro->setfk_id_conductor($_POST["FkDniConductor"]);
            $Registro->setfk_id_contEmpresa($_POST["FkControlador"]);
            $save = $Registro->save();
            //$this->redirect("RegistroRuta", "admin");
        }
        else{
           $ruta= new Ruta($this->adapter);
           $rutas= $ruta->getAll("Cod_ruta");
           $vehiculo= new Vehiculo_Transporte($this->adapter);
           $vehiculos= $vehiculo->getAll("id_vehiculo");
           $conductor= new Conductor($this->adapter);
           $conductores= $conductor->getAll("Dni_conductor");
           $controlador= new ControladorEmpresa($this->adapter);
           $controladores= $controlador->getAll("Dni_controlador"); 
             $this->view("RegistroRuta/crear", array("allFkruta"=>$rutas,"allFkvehiculo"=>$vehiculos,"allFkconductor"=>$conductores,"allFkcontrolador"=>$controladores));   
        }
        //$this->redirect("Articulos", "index");
        $this->view("RegistroRuta/crear", array());
    }

}

