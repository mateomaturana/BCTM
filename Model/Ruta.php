<?php
class Ruta extends EntidadBase{
    private $Cod_ruta;
    private $Origen_barrio_id;
    private $Destino_barrio_id;
   
    public function __construct($adapter) {
        $table="ruta";
        parent::__construct($table,$adapter);
    }
   
    function getCod_ruta() {
        return $this->Cod_ruta;
    }

    function getOrigen_barrio_id() {
        return $this->Origen_barrio_id;
    }

    function getDestino_barrio_id() {
        return $this->Destino_barrio_id;
    }

    function setCod_ruta($Cod_ruta) {
        $this->Cod_ruta = $Cod_ruta;
    }

    function setOrigen_barrio_id($Origen_barrio_id) {
        $this->Origen_barrio_id = $Origen_barrio_id;
    }

    function setDestino_barrio_id($Destino_barrio_id) {
        $this->Destino_barrio_id = $Destino_barrio_id;
    }

        
     
         
    public function save(){
        $query="INSERT INTO ruta (Cod_ruta,Origen_barrio_id,Destino_barrio_id)
                VALUES('".$this->Cod_ruta."',
                       '".$this->Origen_barrio_id."',
                       '".$this->Destino_barrio_id."');";
                       
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
  public function update(){
    $query="UPDATE ruta SET Origen_barrio_id='$this->Origen_barrio_id',Destino_barrio_id='$this->Destino_barrio_id' where Cod_ruta='$this->Cod_ruta' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
}
?>
