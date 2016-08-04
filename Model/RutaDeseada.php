<?php
class Ruta_Deseada extends EntidadBase{
    private $Cod_rutDeseada;
    private $Origen_barrio_id;
    private $Destino_barrio_id;
    private $hora_inicio;
    private $hora_fin ;
    
    
     
    public function __construct($adapter) {
        $table="ruta_deseada";
        parent::__construct($table, $adapter);
    }
    
    function getCod_rutDeseada() {
        return $this->Cod_rutDeseada;
    }

    function getOrigen_barrio_id() {
        return $this->Origen_barrio_id;
    }

    function getDestino_barrio_id() {
        return $this->Destino_barrio_id;
    }

    function getHora_inicio() {
        return $this->hora_inicio;
    }

    function getHora_fin() {
        return $this->hora_fin;
    }

    function setCod_rutDeseada($Cod_rutDeseada) {
        $this->Cod_rutDeseada = $Cod_rutDeseada;
    }

    function setOrigen_barrio_id($Origen_barrio_id) {
        $this->Origen_barrio_id = $Origen_barrio_id;
    }

    function setDestino_barrio_id($Destino_barrio_id) {
        $this->Destino_barrio_id = $Destino_barrio_id;
    }

    function setHora_inicio($hora_inicio) {
        $this->hora_inicio = $hora_inicio;
    }

    function setHora_fin($hora_fin) {
        $this->hora_fin = $hora_fin;
    }

    
        public function save(){
        $query="INSERT INTO ruta_deseada ( Origen_barrio_id, Destino_barrio_id, hora_inicio, hora_fin)
                VALUES('".$this->Origen_barrio_id."',
                       '".$this->Destino_barrio_id."',
                       '".$this->hora_inicio."',
                       '".$this->hora_fin."')";
                        
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
 
}
?>
