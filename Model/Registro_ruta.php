<?php
class Registro_ruta extends EntidadBase{
    private $Codigo_registroRuta;
    private $Fecha_salida;
    private $Fecha_llegada;
    private $fk_cod_ruta;
    private $Id_vehiculo;
    private $fk_id_conductor;
    private $fk_id_contEmpresa;
   
    public function __construct($adapter) {
        $table="registro_ruta";
        parent::__construct($table, $adapter);
    }
    function getfk_cod_ruta() {
        return $this->fk_cod_ruta;
    }

    function setfk_cod_ruta($fk_cod_ruta) {
        $this->fk_cod_ruta = $fk_cod_ruta;
    }
    function getId_vehiculo() {
        return $this->Id_vehiculo;
    }

    function setId_vehiculo($Id_vehiculo) {
        $this->Id_vehiculo = $Id_vehiculo;
    }

        function getfk_id_conductor() {
        return $this->fk_id_conductor;
    }

    function setfk_id_conductor($fk_id_conductor) {
        $this->fk_id_conductor = $fk_id_conductor;
    }
    function getfk_id_contEmpresa() {
        return $this->fk_id_contEmpresa;
    }

    function setfk_id_contEmpresa($fk_id_contEmpresa) {
        $this->fk_id_contEmpresa = $fk_id_contEmpresa;
    }

    function getFecha_salida() {
        return $this->Fecha_salida;
    }
     function getFecha_llegada() {
        return $this->Fecha_llegada;
    }
    function getCodigo_registroRuta() {
        return $this->Codigo_registroRuta;
    }

    function setCodigo_registroRuta($Codigo_registroRuta) {
        $this->Codigo_registroRuta = $Codigo_registroRuta;
    }

        function setFecha_salida($Fecha_salida) {
        $this->Fecha_salida = $Fecha_salida;
    }
    function setFecha_llegada($Fecha_llegada) {
        $this->Fecha_llegada = $Fecha_llegada;
    }
     
         
    public function save(){
        $query="INSERT INTO registro_ruta (Fecha_salida,Fecha_llegada,fk_cod_ruta,id_vehiculo,fk_id_conductor,fk_id_contEmpresa)
                VALUES('".$this->Fecha_salida."',
                       '".$this->Fecha_llegada."',
                       '".$this->fk_cod_ruta."', 
                       '".$this->Id_vehiculo."',
                       '".$this->fk_id_conductor."',
                       '".$this->fk_id_contEmpresa."');";
                       
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
 public function update(){
    echo $query="UPDATE registro_ruta SET Fecha_salida='$this->Fecha_salida', Fecha_llegada='$this->Fecha_llegada', fk_cod_ruta='$this->fk_cod_ruta', fk_id_conductor='$this->fk_id_conductor', fk_id_contEmpresa='$this->fk_id_contEmpresa', id_vehiculo='$this->Id_vehiculo' where Codigo_registroRuta='$this->Codigo_registroRuta' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
}
?>
