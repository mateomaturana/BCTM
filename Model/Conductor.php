<?php
class Conductor extends EntidadBase{
    private $Dni;
    private $nombre;
    private $email;
    private $Telefono;
    private $Contrasenna;
    private $fechaNac;
    private $fk_nit_empresa;
    
     
    public function __construct($adapter) {
        $table="conductor";
        parent::__construct($table, $adapter);
    }
    function getTelefono() {
        return $this->Telefono;
    }

    function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    
        public function getDni() {
        return $this->Dni;
    }
    function getFechaNac() {
        return $this->fechaNac;
    }

    function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

        public function setId($Dni) {
        $this->Dni = $Dni;
    }
     
    public function getNombre() {
        return $this->nombre;
    }
 
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
 
    
 
    public function getEmail() {
        return $this->email;
    }
 
    public function setEmail($email) {
        $this->email = $email;
    }
 
    public function getContrasenna() {
        return $this->Contrasenna;
    }
 
    public function setContrasenna($contrasenna) {
        $this->Contrasenna = $contrasenna;
    }
    


    function getFk_nit_empresa() {
        return $this->fk_nit_empresa;
    }

    function setFk_nit_empresa($fk_nit_empresa) {
        $this->fk_nit_empresa = $fk_nit_empresa;
    }

         
    public function save(){
        $query="INSERT INTO conductor (Dni_conductor, Nombre, Email, Telefono, Contrasenna, Fecha_nacimiento, fk_nit_empresa)
                VALUES('".$this->Dni."',
                       '".$this->nombre."',
                       '".$this->email."',
                           '".$this->Telefono."',
                           '".$this->Contrasenna."',
                       '".$this->fechaNac."',
                        '".$this->fk_nit_empresa."');";
        $save=$this->db()->query($query);
        $newId=  $this->db()->insert_id;
        //$this->db()->error;
        if(!$save && DEBUG){
            echo "Error en base de datos".$this->db()->error;
        }
        return $newId;
    }
 public function update(){
     $query="UPDATE conductor SET Nombre='$this->nombre', Email='$this->email', Telefono='$this->Telefono',  Contrasenna='$this->Contrasenna', Fecha_nacimiento='$this->fechaNac', fk_nit_empresa='$this->fk_nit_empresa' where Dni_conductor='$this->Dni' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
 }
 public function getAllUsers() {
        $query = $this->db()->query("SELECT conductor.*,empresa_transportadora.Nombre as Nombre_empresa FROM conductor inner join empresa_transportadora on conductor.fk_nit_empresa=empresa_transportadora.Nit_empresa");
            
           $resultSet=null;
          while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }
}
?>

