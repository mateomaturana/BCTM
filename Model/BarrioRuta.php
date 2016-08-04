<?php
class BarrioRuta extends EntidadBase{
    private $Cod_ruta;
    private $id_barrioRut;
    
   
    public function __construct($adapter) {
        $table="barrioruta";
        parent::__construct($table,$adapter);
    }
        function getCod_ruta() {
        return $this->Cod_ruta;
    }

    function getid_barrio() {
        return $this->id_barrioRut;
    }

    function setCod_ruta($Cod_ruta) {
        $this->Cod_ruta = $Cod_ruta;
    }

    function setid_barrio($id_barrio) {
        $this->id_barrioRut = $id_barrio;
    }
     
         
    public function save(){
        $query="INSERT INTO barrioruta (Cod_ruta,id_barrio)
                VALUES('".$this->Cod_ruta."',
                       '".$this->id_barrioRut."');";
                       
        $save=$this->db()->query($query);
        $newId=  $this->db()->insert_id;
        //$this->db()->error;
        if(!$save && DEBUG){
            echo "Error en base de datos".$this->db()->error;
        }
        return $newId;
    }
  public function update($cod_ruta_original){
      echo 'mm'.$cod_ruta_original;
    echo $query="UPDATE barrioruta SET Cod_ruta='$this->Cod_ruta', id_barrio='$this->id_barrioRut' where Cod_ruta='$cod_ruta_original' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
// public function getAllUsers() {
//        $query = $this->db->query("SELECT barrioruta.id_barrio, concat( FROM barrioruta inner join ruta on barrioruta.Cod_ruta=ruta.Cod_ruta inner join barrio Orige");
//            
//           $resultSet=null;
//          while ($row = $query->fetch_object()) {
//            $resultSet[] = $row;
//        }
//
//        return $resultSet;
//    }
}
?>