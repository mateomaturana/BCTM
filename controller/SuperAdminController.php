<?php
//require_once 'lib/password.php';
class SuperAdminController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $SuperAdmin = new SuperAdmin($this->adapter);

        //Conseguimos todos los usuarios
      $allSup = $SuperAdmin->getAll();
      //Cargamos la vista index y le pasamos valores
       $this->view("SuperAdmin/admin", array("allSup" => $allSup));
       
    }
    public function borrarSuperAdmin() {
        if (isset($_GET["Dni_SuperAdmin"])) {
            $Dni_SuperAdmin = (int) $_GET["Dni_SuperAdmin"];

            $SuperAdmin = new SuperAdmin($this->adapter);
            $SuperAdmin->deleteBy("Dni_SuperAdmin", $Dni_SuperAdmin);
        }
        $this->redirect("SuperAdmin", "admin");
    }
     public function viewSuperAdmin(){
         if (isset($_GET["Dni_SuperAdmin"])) {
            $Dni_SuperAdmin = (int) $_GET["Dni_SuperAdmin"];
            
            $SuperAdmins = new SuperAdmin($this->adapter);
            $SuperAdmin = $SuperAdmins->getById($Dni_SuperAdmin,"Dni_SuperAdmin");
            
            $this->view("SuperAdmin/view", array(
                "SuperAdmin"=>$SuperAdmin
            ));
            
        }
     }
public function modificarSuperAdmin() {
        if (isset($_GET["Dni_SuperAdmin"])) {
            $Dni_SuperAdmin = (int) $_GET["Dni_SuperAdmin"];

            $superadmins = new SuperAdmin($this->adapter);
            $superadmin = $superadmins->getById($Dni_SuperAdmin, "Dni_SuperAdmin");
            $this->view("SuperAdmin/Update", array("superadmin" => $superadmin ));
        }
    }

    public function actualizarSuperAdmin() {
        
        if (isset($_POST["Nombre"])) {

            $Dni_SuperAdmin = isset($_POST["Dni_SuperAdmin"]) ? $_POST["Dni_SuperAdmin"] : "";
            $Nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";
            $Email = isset($_POST["Email"]) ? $_POST["Email"] : "";
            $telefono = isset($_POST["Telefono"]) ? $_POST["Telefono"] : "";
            $Contrasenna = isset($_POST["Contraseña"]) ? $_POST["Contraseña"] : "";
            $Fecha_nacimiento = isset($_POST["Fecha_nacimiento"]) ? $_POST["Fecha_nacimiento"] : "";

            $superadmin= new SuperAdmin($this->adapter);
            $superadmin->setDni_SuperAdmin($Dni_SuperAdmin);
            $superadmin->setNombre($Nombre);
            $superadmin->setEmail($Email);
            $superadmin->settelefono($telefono);
            $superadmin->setContrasenna($Contrasenna);
            $superadmin->setFecha_nacimiento($Fecha_nacimiento);
            
            $update = $superadmin->update();
           //print_r($update);
           $this->redirect("SuperAdmin", "admin");
        } 
        $this->view("SuperAdmin/Update", array());
    }
    public function crearSuperAdmin() {
        $this->validateSession(array(1,2));
        if (isset($_POST["Dni"])) {

            //Creamos un usuario
            $contra= isset($_POST["Contrasenna"]) ?$_POST["Contrasenna"] : "";
            $Admin = new SuperAdmin($this->adapter);
            $Admin->setDni_SuperAdmin($_POST["Dni"]);
            $Admin->setNombre($_POST["nombre"]);
            $Admin->setEmail($_POST["Email"]);
            $Admin->setContrasenna($_POST["Contrasenna"]);
            $Admin->setFecha_Nacimiento($_POST["Fecha_nac"]);
            $Admin->setTelefono($_POST["telefono"]);
            $Admin->setFk_id_usuario(1);
            $Admin->setContrasenna($contra);


            $save = $Admin->save();
            $this->redirect("SuperAdmin", "admin");
        }
        //$this->redirect("Articulos", "index");
        $this->view("SuperAdmin/crear", array());
    }

}


