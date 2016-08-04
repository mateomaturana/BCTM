<?php

class SuperAdmin extends EntidadBase {

    private $Dni_SuperAdmin;
    private $Nombre;
    private $Email;
    private $Telefono;
    private $contrasenn_a;
    private $Fecha_Nacimiento;
    private $fk_id_usuario;

    public function __construct($adapter) {
        $table = "superadmin";
        parent::__construct($table, $adapter);
    }

    function getDni_SuperAdmin() {
        return $this->Dni_SuperAdmin;
    }

    function getFk_id_usuario() {
        return $this->fk_id_usuario;
    }

    function setFk_id_usuario($fk_id_usuario) {
        $this->fk_id_usuario = $fk_id_usuario;
    }

    function setDni_SuperAdmin($Dni_SuperAdmin) {
        $this->Dni_SuperAdmin = $Dni_SuperAdmin;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    public function getContrasenna() {
        return $this->contrasenn_a;
    }

    public function setContrasenna($_Contrasenna) {
        $this->contrasenn_a = $_Contrasenna;
    }

    public function getFecha_Nacimiento() {
        return $this->Fecha_Nacimiento;
    }

    public function setFecha_Nacimiento($Fecha_Nacimiento) {
        $this->Fecha_Nacimiento = $Fecha_Nacimiento;
    }

    public function save() {
        $options = ['cost' => 12, 'salt' => 'ADSIADSIADSIADSIADSIADSI'];
        $contrasenna = password_hash($this->contrasenn_a, PASSWORD_BCRYPT, $options);
        $this->contrasenn_a = $contrasenna;

        $query = "INSERT INTO superadmin ( Dni_SuperAdmin, Nombre, Email, telefono , Contrasenna, Fecha_nacimiento,fk_id_usuario)
                VALUES('" . $this->Dni_SuperAdmin . "',
                       '" . $this->Nombre . "',
                       '" . $this->Email . "',
                       '" . $this->Telefono . "',
                       '" . $this->contrasenn_a . "',
                       '" . $this->Fecha_Nacimiento . "',"
                . "'" . $this->fk_id_usuario . "');";

        $save = $this->db()->query($query);
        $newId = $this->db()->insert_id;
        //$this->db()->error;
        if (!$save && DEBUG) {
            echo "Error en base de datos" . $this->db()->error;
        }
        return $newId;
    }

    public function update() {
        echo $query = "UPDATE superadmin SET Nombre='$this->Nombre',Email='$this->Email',Fecha_nacimiento='$this->Fecha_Nacimiento', telefono='$this->Telefono', Contrasenna='$this->contrasenn_a' where Dni_SuperAdmin='$this->Dni_SuperAdmin' ";
        $update = $this->db()->query($query);
        if (!$update && DEBUG) {
            echo 'Error en la base de datos: ' . $this->db()->error;
        }
        return $update;
    }

    public function validarLogin() {
//        $contra=  $this->contrasenn_a;
//         $options=['cost'=>12, 'salt'=>'ADSIADSIADSIADSIADSIADSI'];
//            $Admin=$this->setContrasenna(password_hash($contra, PASSWORD_BCRYPT,$options));
        $resultSet = null;
        $query = $this->db()->query("SELECT * FROM superadmin where Email='$this->Email'");
        if ($row = $query->fetch_object()) {
            $options = ['cost' => 12, 'salt' => 'ADSIADSIADSIADSIADSIADSI'];
            $contrasenna = password_hash($this->contrasenn_a, PASSWORD_BCRYPT, $options);

            if (($this->contrasenn_a== $row->Contrasenna)) {
                $_SESSION['fk_id_usuario'] = $row->fk_id_usuario;
                $_SESSION['Email'] = $row->Email;
                $_SESSION["timeout"] = time();
                //session_regenerate_id();
                return true;
            }
        }
        return false;
    }

}
?>





