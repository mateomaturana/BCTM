<?php
class Vehiculo_Transporte extends EntidadBase{
    private $id_vehiculo;
    private $placa_vehiculo;
    private $Activo;
    private $Tipo_vehiculo;
    private $cupo_vehiculo;
    private $fk_nit_empresa;
   
     
    public function __construct($adapter) {
        $table="vehiculo_transporte";
        parent::__construct($table,$adapter);
    }
    function getfk_nit_empresa() {
        return $this->fk_nit_empresa;
    }

    function setfk_nit_empresa($fk_nit_empresa) {
        $this->fk_nit_empresa = $fk_nit_empresa;
    }

        function getid_vehiculo() {
        return $this->id_vehiculo;
    }

    function getplaca_vehiculo() {
        return $this->placa_vehiculo;
    }
    function getActivo() {
        return $this->Activo;
    }
    function getTipo_vehiculo() {
        return $this->Tipo_vehiculo;
    }
    function getcupo_vehiculo() {
        return $this->cupo_vehiculo;
    }

    function setid_vehiculo($id_vehiculo) {
        $this->id_vehiculo = $id_vehiculo;
    }

    function setPlaca_vehiculo($Placa_vehiculo) {
        $this->placa_vehiculo = $Placa_vehiculo;
    }
     function setActivo($Activo) {
        $this->Activo = $Activo;
    }
     function setTipo_vehiculo($Tipo_vehiculo) {
        $this->Tipo_vehiculo= $Tipo_vehiculo;
    }
     function setcupo_vehiculo($cupo_vehiculo) {
        $this->cupo_vehiculo = $cupo_vehiculo;
    }

         
    public function save(){
        $query="INSERT INTO vehiculo_transporte (Placa_vehiculo,Activo,Tipo_vehiculo,cupo_vehiculo,fk_nit_empresa)
                VALUES('".$this->placa_vehiculo."',
                       '".$this->Activo."',
                       '".$this->Tipo_vehiculo."',
                       '".$this->cupo_vehiculo."',
                       '".$this->fk_nit_empresa."');";
                       
        $save=$this->db()->query($query);
      if(!$save && DEBUG){
            echo "Error en la base de datos: ".$this->db()->error;
        }
        return $save;
     
    }
 public function update(){
   echo $query="UPDATE vehiculo_transporte SET Placa_vehiculo='$this->placa_vehiculo', Activo='$this->Activo', Tipo_vehiculo='$this->Tipo_vehiculo', cupo_vehiculo='$this->cupo_vehiculo', fk_nit_empresa='$this->fk_nit_empresa' where id_vehiculo='$this->id_vehiculo' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
 }
}
?>

