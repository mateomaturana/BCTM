<?php
class RecomendacionRuta extends EntidadBase{
    private $Cod_ruta;
    private $Dni_usuario;
    private $fecha_registro;
    private $Recomendacion;
    private $tags ;
    
    
     
    public function __construct($adapter) {
        $table="recomendacion_ruta";
        parent::__construct($table, $adapter);
    }
    function getCod_ruta() {
        return $this->Cod_ruta;
    }

    function setCod_ruta($Cod_ruta) {
        $this->Cod_ruta = $Cod_ruta;
    }

        public function getDni_usuario() {
        return $this->Dni_usuario;
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
        $query="INSERT INTO recomendacion_ruta (Cod_ruta, Dni_usuario, fecha_registro, Recomendacion, tags)
                VALUES('".$this->Cod_ruta."',
                       '".$this->Dni_usuario."',
                       '".$this->fecha_registro."',
                       '".$this->Recomendacion."',
                       '".$this->tags."');";
                        
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
  public function update(){
    $query="UPDATE recomendacion_ruta SET Dni_usuario='$this->Dni_usuario', fecha_registro='$this->fecha_registro', Recomendacion='$this->Recomendacion', tags='$this->tags' where Cod_ruta='$this->Cod_ruta' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
 public function getAllUsers() {
        $query = $this->db()->query("SELECT recomendacion_ruta.*,concat(ruta.Origen_barrio_id,"-",ruta.Destino_barrio_id )as Nombre_ruta FROM recomendacion_ruta inner join ruta on recomendacion_ruta.Cod_ruta=ruta.Cod_ruta INNER join usuario on recomendacion_ruta.Dni_usuario=usuario.Dni_usuario INNER join barrio on usuario.fk_id_barrio=barrio.id_barrio;");
            
           $resultSet=null;
          while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }
}
?>


