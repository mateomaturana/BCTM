<?php

class UsuarioRutaDeseada extends EntidadBase{
    private $Cod_ruta;
    private $Dni_usuario;
    private $fecha_registro;
    private $Recomendacion;
    private $tags;
    
    
     
    public function __construct() {
        $table="UsuarioRutaDeseada";
        parent::__construct($table);
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
 
    
 
    public function getRecomendacion() {
        return $this->Recomendacion;
    }
 
    public function setRecomendacion($Recomendacion) {
        $this->Recomendacion = $Recomendacion;
    }
 
    public function gettags() {
        return $this->tags;
    }
 
    public function settags($tags) {
        $this->tags = $tags;
    }
    

     
    public function save(){
        $query="INSERT INTO UsuarioRutaDeseada (Cod_ruta, Dni_usuario, fecha_registro, Recomendacion, tags)
                VALUES(NULL,
                       '".$this->Cod_ruta."',
                       '".$this->Dni_usuario."',
                       '".$this->fecha_registro."',
                       '".$this->Recomendacion."',
                       '".$this->tags."');";
                       
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
  public function update(){
    echo $query="UPDATE usuario_rutdeseada SET Dni_usuario='$this->Dni_usuario', fecha_registro='$this->fecha_registro' where Cod_rutDeseada='$this->Cod_ruta' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
}
?>
