<?php

class ControladorController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $Controlador = new ControladorEmpresa($this->adapter);

        //Conseguimos todos los usuarios
      $allContEmp = $Controlador->getAllUsers();
      //Cargamos la vista index y le pasamos valores
       $this->view("Controlador/admin", array("allContEmp" => $allContEmp));
       
    }
    public function borrarControlador() {
        if (isset($_GET["Dni_controlador"])) {
            $Dni_controlador = (int) $_GET["Dni_controlador"];

            $Controlador = new ControladorEmpresa($this->adapter);
            $Controlador->deleteBy("Dni_controlador", $Dni_controlador);
        }
        $this->redirect("Controlador", "admin");
    }
     public function viewControlador(){
         if (isset($_GET["Dni_controlador"])) {
            $Dni_controlador = (int) $_GET["Dni_controlador"];
            
            $Controladors = new ControladorEmpresa($this->adapter);
            $Controlador = $Controladors->getById($Dni_controlador,"Dni_controlador");
            
            $this->view("Controlador/view", array(
                "Controlador"=>$Controlador
            ));
            
        }
     }
public function modificarControlador() {
        if (isset($_GET["Dni_controlador"])) {
            $Dni_controlador = (int) $_GET["Dni_controlador"];

            $controlador_empresas = new ControladorEmpresa($this->adapter);
            $controlador_empresa = $controlador_empresas->getById($Dni_controlador, "Dni_controlador");
            
             $empresa= new EmpresaTransportadora($this->adapter);
            $empre=$empresa->getAll("Nit_empresa");
            $this->view("Controlador/Update", array("controlador_empresa" => $controlador_empresa, "empres"=>$empre));
        }
    }
    public function actualizarControlador() {
        
        if (isset($_POST["Nombre"])) {

            $Dni_controlador = isset($_POST["Dni_controlador"]) ? $_POST["Dni_controlador"] : "";
            $Nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";
            $Telefono = isset($_POST["Telefono"]) ? $_POST["Telefono"] : "";
            $email= isset($_POST["Email"]) ? $_POST["Email"] : "";
            $Contrasenna = isset($_POST["Contrasenna"]) ? $_POST["Contrasenna"] : "";
            $Fecha_nacimiento = isset($_POST["Fecha_nacimiento"]) ? $_POST["Fecha_nacimiento"] : "";
           $fk_nit_empresa= isset($_POST["fk_nit_empresa"]) ? $_POST["fk_nit_empresa"] : "";

            $controlador_empresa= new ControladorEmpresa($this->adapter);
            $controlador_empresa->setId($Dni_controlador);
            $controlador_empresa->setNombre($Nombre);
            $controlador_empresa->setEmail($email);
            $controlador_empresa->setFk_nit_empresa($fk_nit_empresa);
            $controlador_empresa->setTelefono($Telefono);
            $controlador_empresa->setContrasenna($Contrasenna);
            $controlador_empresa->setFechaNac($Fecha_nacimiento);
            
            
            $update = $controlador_empresa->update();
            //print_r($update);
           $this->redirect("Controlador", "admin");
        } 
        $this->view("Controlador/Update", array());
    }
    public function crearControlador() {
        if (isset($_POST["nombre"])) {

            //Creamos un usuario
            $Controlador = new ControladorEmpresa($this->adapter);
            $Controlador->setId($_POST["Dni"]);
            $Controlador->setNombre($_POST["nombre"]);
            $Controlador->setEmail($_POST["Email"]);
            $Controlador->setTelefono($_POST["Telefono"]);
            $Controlador->setContrasenna($_POST["Contrasenna"]);
            $Controlador->setFechaNac($_POST["Fecha_nac"]);
            $Controlador->setFk_nit_empresa($_POST["FkNitEmpresa"]);


            $save = $Controlador->save();
            $this->redirect("Controlador", "admin");
        }
        else{
           $empresa= new EmpresaTransportadora($this->adapter);
           $empresas= $empresa->getAll("id_comuna");
           
             $this->view("Controlador/crear", array("allFkempresa"=>$empresas));
             
        }
        //$this->redirect("Articulos", "index");
        $this->view("Controlador/crear", array());
    }

}

