<?php
class Ruta_empresa extends EntidadBase{
    private $Cod_ruta ;
    private $Nit_empresa;
    private $Origen_barrio_id ;
    private $Destino_barrio_id;
    private $Duracion_aproximada ;
    private $Hora_inicio ;
    private $Hora_fin ;
    
    
    
    public function __construct($adapter) {
        $table="ruta_empresa";
        parent::__construct($table, $adapter);
    }
    
    function getCod_ruta() {
        return $this->Cod_ruta;
    }

    function getNit_empresa() {
        return $this->Nit_empresa;
    }

    function getOrigen_barrio_id() {
        return $this->Origen_barrio_id;
    }

    function getDestino_barrio_id() {
        return $this->Destino_barrio_id;
    }

    function getDuracion_aproximada() {
        return $this->Duracion_aproximada;
    }

    function getHora_inicio() {
        return $this->Hora_inicio;
    }

    function getHora_fin() {
        return $this->Hora_fin;
    }

    function setCod_ruta($Cod_ruta) {
        $this->Cod_ruta = $Cod_ruta;
    }

    function setNit_empresa($Nit_empresa) {
        $this->Nit_empresa = $Nit_empresa;
    }

    function setOrigen_barrio_id($Origen_barrio_id) {
        $this->Origen_barrio_id = $Origen_barrio_id;
    }

    function setDestino_barrio_id($Destino_barrio_id) {
        $this->Destino_barrio_id = $Destino_barrio_id;
    }

    function setDuracion_aproximada($Duracion_aproximada) {
        $this->Duracion_aproximada = $Duracion_aproximada;
    }

    function setHora_inicio($Hora_inicio) {
        $this->Hora_inicio = $Hora_inicio;
    }

    function setHora_fin($Hora_fin) {
        $this->Hora_fin = $Hora_fin;
    }

         
    public function save(){
        $query="INSERT INTO ruta_empresa (Cod_ruta,Nit_empresa, Origen_barrio_id, Destino_barrio_id, Duracion_aproximada , Hora_inicio, Hora_fin)
                VALUES('".$this->Cod_ruta."',
                       '".$this->Nit_empresa."',
                       '".$this->Origen_barrio_id."',
                       '".$this->Destino_barrio_id."',
                       '".$this->Duracion_aproximada."',
                       '".$this->Hora_inicio."',
                       '".$this->Hora_fin."');";
        
                        
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
 
}
?>





