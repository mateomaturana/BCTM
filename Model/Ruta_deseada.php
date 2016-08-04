<?php
class Registro_rutaDeseada extends EntidadBase{
    private $Cod_rutDeseada;
    private $Origen_barrio_id;
    private $Destino_barrio_id;
    private $hora_inicio;
    private $hora_fin;
   
    public function __construct($adapter) {
        $table="Ruta_deseada";
        parent::__construct($table,$adapter);
    }
    function getOrigen_barrio_id() {
        return $this->Origen_barrio_id;
    }

    function setOrigen_barrio_id($Origen_barrio_id) {
        $this->Origen_barrio_id = $Origen_barrio_id;
    }
    function getDestino_Barrio_id() {
        return $this->Destino_barrio_id;
    }

    function setDestino_barrio_id($Destino_barrio_id) {
        $this->Destino_barrio_id = $Destino_barrio_id;
    }
    function getCod_rutDeseada() {
        return $this->Cod_rutDeseada;
    }

    function gethora_inicio() {
        return $this->hora_inicio;
    }
     function gethora_fin() {
        return $this->hora_fin;
    }

    function setCod_rutDeseada($Cod_rutDeseada) {
        $this->Cod_rutDeseada = $Cod_rutDeseada;
    }

    function sethora_inicio($hora_inicio) {
        $this->hora_inicio = $hora_inicio;
    }
    function sethora_fin($hora_fin) {
        $this->hora_fin = $hora_fin;
    }
     
         
    public function save(){
        $query="INSERT INTO Ruta_deseada (cod_rutDeseada,Origen_barrio_id,Destino_barrio_id,hora_inicio,hora_fin)
                VALUES(NULL,
                       '".$this->Cod_rutDeseada."',
                       '".$this->Origen_barrio_id."',
                       '".$this->Destino_barrio_id."',
                       '".$this->hora_inicio."',
                       '".$this->hora_fin."');";
                       
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
 
}
?>
