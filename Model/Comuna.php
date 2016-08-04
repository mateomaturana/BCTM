<?php
class Comuna extends EntidadBase{
    private $id_comuna;
    private $nombre;
   
     
    public function __construct($adapter) {
        $table="comuna";
        parent::__construct($table, $adapter);
    }
    
    function getId() {
        return $this->id_comuna;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id_comuna) {
        $this->id_comuna = $id_comuna;;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

         
    public function save(){
        $query="INSERT INTO comuna (id_comuna,Nombre)
                VALUES('".$this->id_comuna."',
                       '".$this->nombre."');";
                       
        $save=$this->db()->query($query);
        $newId=  $this->db()->insert_id;
        //$this->db()->error;
        if(!$save && DEBUG){
            echo "Error en base de datos".$this->db()->error;
        }
        return $newId;
    }
     public function update(){
    $query="UPDATE comuna SET nombre='$this->nombre' where id_comuna='$this->id_comuna' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
 
}
?>
