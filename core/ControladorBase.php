<?php
session_start();
class ControladorBase {

    protected $layout = '/cms_layout';

    public function __construct() {
        require_once 'Conectar.php';
        require_once 'EntidadBase.php';
        require_once 'ModeloBase.php';

        //Incluir todos los modelos
        foreach (glob("model/*.php") as $file) {
            require_once $file;
        }
        if(isset($_SESSION["timeout"])){
            $tiempoSesion=  time()-$_SESSION["timeout"];
            if($tiempoSesion>(TIEMPO_INACTIVIDAD*60)){
                session_destroy();
                $this->redirect("Login","logout");
            }else{
                $_SESSION["timeout"]=  time();
            }
        }
    }
    public function validateSession($tipoUsuarios=array()){
        if(!isset($_SESSION['fk_id_usuario'])){
            $this->redirect("Login","login");
        }else{
            if(!in_array($_SESSION['fk_id_usuario'], $tipoUsuarios)){
                $this->redirect("Login","error&msg=1");
            }
        }
        
    }
    

    public function view($vista, $datos = null) {
        if ($datos) {
            foreach ($datos as $id_assoc => $valor) {
                ${$id_assoc} = $valor;
            }
        }
        require_once 'core/AyudaVistas.php';
        $helper = new AyudaVistas();

        require_once 'view/layouts' . $this->layout . '.php';
    }

    public function redirect($controlador = CONTROLADOR_DEFECTO, $accion = ACCION_DEFECTO) {
        header("Location:index.php?controller=" . $controlador . "&action=" . $accion);
    }

    //Métodos para los controladores
}
?>

