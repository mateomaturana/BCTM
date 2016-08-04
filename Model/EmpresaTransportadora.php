<?php
class EmpresaTransportadora extends EntidadBase{
    private $Nit;
    private $nombre;
    private $email;
    private $Direccion;
    private $Contrasenna;
    private $fechaReg;
    
    
     
    public function __construct($adapter) {
        $table="empresa_transportadora";
        parent::__construct($table,$adapter);
    }
    function getNit() {
        return $this->Nit;
    }

    function getDireccion() {
        return $this->Direccion;
    }

    function getFechaReg() {
        return $this->fechaReg;
    }

    function setNit($Nit) {
        $this->Nit = $Nit;
    }

    function setDireccion($Direccion) {
        $this->Direccion = $Direccion;
    }

    function setFechaReg($fechaReg) {
        $this->fechaReg = $fechaReg;
    }

    
    
        public function getDni() {
        return $this->Dni;
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
    

    
     
    public function save(){
        $query="INSERT INTO Empresa_transportadora (Nit_empresa,Nombre,Email,Contrasenna,Direccion,fecha_registro)
                VALUES('".$this->Nit."',
                       '".$this->nombre."',
                       '".$this->email."',
                       '".$this->Contrasenna."',
                       '".$this->Direccion."',
                       '".$this->fechaReg."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
    public function update(){
    echo $query="UPDATE empresa_transportadora SET Nombre='$this->nombre',Contrasenna='$this->Contrasenna',Email='$this->email',Direccion='$this->Direccion', fecha_registro='$this->fechaReg' where Nit_empresa='$this->Nit' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
}