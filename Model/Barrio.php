<?php
class Barrio extends EntidadBase{
    private $id_barrio;
    private $Nombre;
    private $Fk_id_comuna;
   
     
    public function __construct($adapter) {
        $table="barrio";
        parent::__construct($table, $adapter);
    }
    
    
    function getId_barrio() {
        return $this->id_barrio;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function getFk_id_comuna() {
        return $this->Fk_id_comuna;
    }

    function setId_barrio($id_barrio) {
        $this->id_barrio = $id_barrio;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    function setFk_id_comuna($Fk_id_comuna) {
        $this->Fk_id_comuna = $Fk_id_comuna;
    }

        public function save(){
        $query="INSERT INTO barrio (Nombre,fk_id_comuna)
                VALUES('".$this->Nombre."',
                       '".$this->Fk_id_comuna."');";
                       
        $save=$this->db()->query($query);
        $newId=  $this->db()->insert_id;
        //$this->db()->error;
        if(!$save && DEBUG){
            echo "Error en base de datos".$this->db()->error;
        }
        return $newId;
    }
    public function update(){
    echo $query="UPDATE barrio SET Nombre='$this->Nombre', fk_id_comuna='$this->Fk_id_comuna' where id_barrio='$this->id_barrio' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
public function getAllUsers() {
        $query = $this->db()->query("SELECT Barrio.*, comuna.Nombre AS Nombre_comuna FROM Barrio inner join comuna on barrio.fk_id_comuna=comuna.id_comuna");
            
           $resultSet=null;
          while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }
 
}
?>

