<?php

class EmpresaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $empresa = new EmpresaTransportadora($this->adapter);

        //Conseguimos todos los usuarios
      $allemp = $empresa->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("Empresa/admin", array("allemp" => $allemp));
       
    }
public function borrarEmpresa() {
        if (isset($_GET["Nit_empresa"])) {
            $Nit_empresa = (int) $_GET["Nit_empresa"];

            $empresa = new EmpresaTransportadora($this->adapter);
            $empresa->deleteBy("Nit_empresa", $Nit_empresa);
        }
        $this->redirect("Empresa", "admin");
    }
    public function viewEmpresa(){
         if (isset($_GET["Nit_empresa"])) {
            $Nit_empresa = (int) $_GET["Nit_empresa"];
            
            $empresas = new EmpresaTransportadora($this->adapter);
            $empresa = $empresas->getById($Nit_empresa,"Nit_empresa");
            
            $this->view("Empresa/view", array(
                "empresa"=>$empresa
            ));
            
        }
     }
public function modificarEmpresa() {
        if (isset($_GET["Nit_empresa"])) {
            $Nit_empresa = (int) $_GET["Nit_empresa"];

            $empresa_transportadoras = new EmpresaTransportadora($this->adapter);
            $empresa_transportadora = $empresa_transportadoras->getById($Nit_empresa, "Nit_empresa");
            $this->view("Empresa/Update", array("empresa_transportadora" => $empresa_transportadora));
        }
    }

    public function actualizarEmpresa() {
        
        if (isset($_POST["Nombre"])) {
echo "tambien";
            $Nit_empresa = isset($_POST["Nit_empresa"]) ? $_POST["Nit_empresa"] : "";
            $Nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";
            $Email = isset($_POST["Email"]) ? $_POST["Email"] : "";
            $Contrasenna = isset($_POST["Contrasenna"]) ? $_POST["Contrasenna"] : "";
            $Direccion  = isset($_POST["Direccion"]) ? $_POST["Direccion"] : "";
            //$fecha_registro = isset($_POST["fecha_registro"]) ? $_POST["fecha_registro"] : "";

            $empresa_transportadora= new EmpresaTransportadora($this->adapter);
            $empresa_transportadora->setNit($Nit_empresa );
            $empresa_transportadora->setNombre($Nombre);
            $empresa_transportadora->setEmail($Email);
            $empresa_transportadora->setContrasenna($Contrasenna);
            $empresa_transportadora->setDireccion($Direccion);
            $empresa_transportadora->setFechaReg(DATE("y-m-d h:m:s"));
            
            $update = $empresa_transportadora->update();
           // print_r($update);
           $this->redirect("Empresa", "admin");
        } 
        $this->view("Empresa/Update", array());
    }
    public function crearEmpresa() {
        if (isset($_POST["nombre"])) {

            //Creamos un usuario
            $Empresa = new EmpresaTransportadora($this->adapter);
            $Empresa->setNit($_POST["Dni"]);
            $Empresa->setNombre($_POST["nombre"]);
            $Empresa->setEmail($_POST["Email"]);
            $Empresa->setContrasenna($_POST["Contrasenna"]);
            $Empresa->setFechaReg(DATE("y-m-d h:i:s"));
            $Empresa->setDireccion($_POST["Direccion"]);
            
            $this->redirect("Empresa", "admin");


            $save = $Empresa->save();
        }
        //$this->redirect("Articulos", "index");
        $this->view("Empresa/crear", array());
    }

}

