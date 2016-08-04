<?php

class NotificacionEmpresaController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function admin() {

        //Creamos el objeto usuario
       $Notificacion = new Notificacion_empresa ($this->adapter);

        //Conseguimos todos los usuarios
      $allNot = $Notificacion->getAllUsers();
      //Cargamos la vista index y le pasamos valores
       $this->view("NotificacionEmpresa/admin", array("allNot" => $allNot));
       
    }
    public function borrarNotificacionEmpresa() {
        if (isset($_GET["Nit_empresa"])) {
            $Nit_empresa = (int) $_GET["Nit_empresa"];

            $Notificacion = new Notificacion_empresa($this->adapter);
            $Notificacion->deleteBy("Nit_empresa", $Nit_empresa);
        }
        $this->redirect("NotificacionEmpresa", "admin");
    }
     public function viewNotificacionEmpresa(){
         if (isset($_GET["Nit_empresa"])) {
            $Nit_empresa = (int) $_GET["Nit_empresa"];
            
            $Notificacions = new Notificacion_empresa($this->adapter);
            $Notificacion = $Notificacions->getByIdUserNot($Nit_empresa,"Nit_empresa");
            
            $this->view("NotificacionEmpresa/view", array(
                "Notificacion"=>$Notificacion
            ));
            
        }
     }
     public function modificarNotificacionEmpresa() {
        if (isset($_GET["Nit_empresa"])) {
            $Nit_empresa = (int) $_GET["Nit_empresa"];

            $notificacion_empresas = new Notificacion_Empresa($this->adapter);
            $notificacion_empresa = $notificacion_empresas->getById($Nit_empresa, "Nit_empresa");
            
            $usuario=new Usuario($this->adapter);
            $usu=$usuario->getAll("Dni_usuario");
            $this->view("NotificacionEmpresa/Update", array("notificacion_empresa" => $notificacion_empresa,
                "usua"=>$usu));
        }
    }

    public function actualizarNotificacionEmpresa() {
        
        if (isset($_POST["Nit_empresa"])) {;
            $Nit_empresa = isset($_POST["Nit_empresa"]) ? $_POST["Nit_empresa"] : "";
            $Dni_usuario = isset($_POST["Dni_usuario"]) ? $_POST["Dni_usuario"] : "";
            // = isset($_POST["fecha_registro"]) ? $_POST["fecha_registro"] : "";
            $Comentario = isset($_POST["Comentario"]) ? $_POST["Comentario"] : "";
            $Tipo_notificacion = isset($_POST["Tipo_notificacion"]) ? $_POST["Tipo_notificacion"] : "";

            $notificacion_empresa= new Notificacion_empresa($this->adapter);
            $notificacion_empresa->setNit_empresa($Nit_empresa);
            $notificacion_empresa->setId($Dni_usuario);
            $notificacion_empresa->setfecha_registro(DATE("y-m-d h:m:s"));
            $notificacion_empresa->setComentario($Comentario);
            $notificacion_empresa->setTipo_notificacion($Tipo_notificacion);
            
            $update = $notificacion_empresa->update();
            //print_r($update);
           $this->redirect("NotificacionEmpresa", "admin");
        } 
        $this->view("NotificacionEmpresa/Update", array());
    }

    public function crearNotificacionEmpresa() {
  
        if (isset($_POST["FkNitEmpresa"])) {

            //Creamos un usuario
            $Notificacion = new Notificacion_empresa($this->adapter);
            $Notificacion->setNit_empresa($_POST["FkNitEmpresa"]);
            $Notificacion->setId($_POST["FkNitusuario"]);
            $Notificacion->setComentario($_POST["Comentario"]);
            $Notificacion->setTipo_notificacion($_POST["tipo"]);
            $Notificacion->setfecha_registro(DATE("y-m-d h:i:s"));
            

  
            $save = $Notificacion->save();
          
            $this->redirect("notificacionEmpresa", "admin");
        }
        else{
           $empresa= new EmpresaTransportadora($this->adapter);
           $empresas= $empresa->getAll("id_comuna");
           $usuario= new Usuario($this->adapter);
           $Usuarios= $usuario->getAll("id_comuna");
           
             
             $this->view("NotificacionEmpresa/crear", array("allFkempresa"=>$empresas,"allFkusuario"=>$Usuarios));
             
        }
        //$this->redirect("Articulos", "index");
        $this->view("NotificacionEmpresa/crear", array());
    }

}


