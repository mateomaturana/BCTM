<?php

class ConductorController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $Conductor = new Conductor($this->adapter);

        //Conseguimos todos los usuarios
      $allCon = $Conductor->getAllUsers();
      //Cargamos la vista index y le pasamos valores
       $this->view("Conductor/admin", array("allCon" => $allCon));
       
    }
    public function borrarConductor() {
        if (isset($_GET["Dni_conductor"])) {
            $Dni_conductor = (int) $_GET["Dni_conductor"];

            $Conductor = new Conductor($this->adapter);
            $Conductor->deleteBy("Dni_conductor", $Dni_conductor);
        }
        $this->redirect("Conductor", "admin");
    }
    
    public function viewConductor(){
         if (isset($_GET["Dni_conductor"])) {
            $Dni_conductor = (int) $_GET["Dni_conductor"];
            
            $Conductors = new Conductor($this->adapter);
            $Conductor = $Conductors->getById($Dni_conductor,"Dni_conductor");
            
            $this->view("Conductor/View", array(
                "Conductor"=>$Conductor
            ));
            
        }
     }
public function modificarConductor() {
        if (isset($_GET["Dni_conductor"])) {
            $Dni_conductor = (int) $_GET["Dni_conductor"];

            $conductors = new Conductor($this->adapter);
            $conductor = $conductors->getById($Dni_conductor, "Dni_conductor");
            
            $empresa= new EmpresaTransportadora($this->adapter);
            $empre=$empresa->getAll("Nit_empresa");
            $this->view("Conductor/Update", array("conductor" => $conductor, "empres" => $empre));
            //echo array("conductor" => $conductor, "empres", $empre);
        }
    }

    public function actualizarConductor() {
        
        if (isset($_POST["Nombre"])) {

            $Dni = isset($_POST["Dni_conductor"]) ? $_POST["Dni_conductor"] : "";
            $nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";
            $Email = isset($_POST["Email"]) ? $_POST["Email"] : "";
            $Telefono = isset($_POST["Telefono"]) ? $_POST["Telefono"] : "";
            $Contrasenna = isset($_POST["Contrasenna"]) ? $_POST["Contrasenna"] : "";
            $Fecha_nac = isset($_POST["Fecha_nacimiento"]) ? $_POST["Fecha_nacimiento"] : "";
            $fkNitEmpresa = isset($_POST["fk_nit_empresa"]) ? $_POST["fk_nit_empresa"] : "";

            $conductor= new Conductor ($this->adapter);
            $conductor->setId($Dni);
            $conductor->setNombre($nombre);
            $conductor->setEmail($Email);
            $conductor->setTelefono($Telefono);
            $conductor->setContrasenna($Contrasenna);
            $conductor->setFechaNac($Fecha_nac);
            $conductor->setfk_nit_empresa($fkNitEmpresa);
            
            $update = $conductor->update();
           //print_r($update);
           $this->redirect("Conductor", "admin");
        }else{
            $this->redirect("Conductor", "admin");
        }
    }
    public function crearConductor() {
        if (isset($_POST["nombre"])) {

            //Creamos un usuario
            $Conductor = new Conductor($this->adapter);
            $Conductor->setId($_POST["Dni"]);
            $Conductor->setNombre($_POST["nombre"]);
            $Conductor->setEmail($_POST["Email"]);
            $Conductor->setTelefono($_POST["Telefono"]);
            $Conductor->setContrasenna($_POST["Contrasenna"]);
            $Conductor->setFechaNac($_POST["Fecha_nac"]);
            $Conductor->setFk_nit_empresa($_POST["FkNitEmpresa"]);
           

            $save = $Conductor->save();
             $this->redirect("conductor", "admin");
        }
        else{
           $empresa= new EmpresaTransportadora($this->adapter);
           $empresas= $empresa->getAll("id_comuna");
           
             $this->view("Conductor/crear", array("allFkempresa"=>$empresas));
             
        }
        //$this->redirect("Articulos", "index");
        $this->view("Conductor/crear", array());
    }

}
