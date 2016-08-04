<?php

class UsuarioRuta extends EntidadBase{
    private $Cod_ruta;
    private $Dni_usuario;
    private $fecha_registro;
    
    
    
     
    public function __construct($adapter) {
        $table="usuario_ruta";
        parent::__construct($table, $adapter);
    }
    function getCod_ruta() {
        return $this->Cod_ruta;
    }

    function setCod_ruta($Cod_ruta) {
        $this->Cod_ruta = $Cod_ruta;
    }

        public function Dni_usuario() {
        return $this->Dni_usuario();
    }
 
    public function setId($Dni_usuario) {
        $this->Dni_usuario = $Dni_usuario;
    }
     
    public function getfecha_registro() {
        return $this->fecha_registro;
    }
 
    public function setfecha_registro($fecha_registro) {
        $this->fecha_registro = $fecha_registro;
    }
 
    
 
    
    

     
    public function save(){
        $query="INSERT INTO usuario_ruta (Cod_ruta, Dni_usuario, fecha_registro)
                VALUES('".$this->Cod_ruta."',
                       '".$this->Dni_usuario."',
                       '".$this->fecha_registro."');";
                       
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
 
}
?>
