<?php
class LoginController extends ControladorBase {

    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }
public function login(){
    $TipoUsuario= isset($_POST["TipoUsuario"])? trim($_POST["TipoUsuario"]):"";
    if($TipoUsuario==1){
  if(isset($_POST["correo"]) && $_POST["contrassena"]){
      $correo=  isset($_POST["correo"]) ? trim($_POST["correo"]):"";
      $contrassena= isset($_POST["contrassena"]) ? trim($_POST["contrassena"]):"";
      if($correo==''||$contrassena==''){
          $this->view("Login/Login",array(
              "errores"=> "El usuario o contrasena no pueden estar vacios"
          ));
          
      }else{
          $administrador=new SuperAdmin($this->adapter);
          $administrador->setEmail($correo);
          $administrador->setContrasenna($contrassena);
          if($administrador->validarLogin()){
              //$this->view("SuperAdmin/admin");
               $this->redirect("superAdmin", "admin");
          }else{
              //$options=['cost'=>12, 'salt'=>'ADSIADSIADSIADSIADSIADSI'];
            //$Admin->setContrasenna(password_hash($contra, PASSWORD_BCRYPT,$options));
           // echo "<br>"."logincontroller".password_hash("098765432", PASSWORD_BCRYPT,$options);


              $this->view("Login/login", array(
                  "errores"=>"El usuario o contraseña son incorrectos"
              ));
          }
      }
  }else{
      $this->view("Login/Login");
  } 
    }
    if($TipoUsuario==2){
        if(isset($_POST["correo"]) && $_POST["contrassena"]){
      $correo=  isset($_POST["correo"]) ? trim($_POST["correo"]):"";
      $contrassena= isset($_POST["contrassena"]) ? trim($_POST["contrassena"]):"";
      if($correo==''||$contrassena==''){
          $this->view("Login/Login",array(
              "errores"=> "El usuario o contrasena no pueden estar vacios"
          ));
          
      }else{
          $Empresa=new EmpresaTransportadora($this->adapter);
          $Empresa->setEmail($correo);
          $Empresa->setContrasenna($contrassena);
          if($Empresa->validarLogin()){
              //$this->view("SuperAdmin/admin");
               $this->redirect("controlador", "admin");
          }else{
              //$options=['cost'=>12, 'salt'=>'ADSIADSIADSIADSIADSIADSI'];
            //$Admin->setContrasenna(password_hash($contra, PASSWORD_BCRYPT,$options));
           // echo "<br>"."logincontroller".password_hash("098765432", PASSWORD_BCRYPT,$options);


              $this->view("Login/login", array(
                  "errores"=>"El usuario o contraseña son incorrectos"
              ));
          }
      }
  }else{
      $this->view("Login/Login");
  } 
    }
}
public function logout() {
    
    session_destroy();
      $this->view("Login/Login");
}
public function error($code=0) {
    $codeMessage=(isset($_GET['msg'])? $GET['msg']:$code );
    $message="";
    switch ($codeMessage){
        case 1:
            $message="No esta autorizado para acceder a esta accion";
            break;
        case 2:
            $message="La accion que intenta cargar no existe";
            break;
        default :
            $message="Error desconocido.";
            break;
    }
    $this->view("Login/error", array(
        "message"=>$message
    ));
    
}
}