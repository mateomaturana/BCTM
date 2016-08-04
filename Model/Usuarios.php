<?php
class Usuario extends EntidadBase{
    private $Dni;
    private $nombre;
    private $email;
    private $Contrasenna;
    private $fechaNac;
    private $genero;
    private $fk_id_barrio;
    
     
    public function __construct($adapter) {
        $table="usuario";
        parent::__construct($table,$adapter);
    }
    function getFechaNac() {
        return $this->fechaNac;
    }

    function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

        public function getDni() {
        return $this->Dni;
    }
 
    public function setId($Dni) {
        $this->Dni = $Dni;
    }
     
    public function getNombre() {
        return $this->nombre;
    }
 
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
 
    
 
    public function getEmail() {
        return $this->email;
    }
 
    public function setEmail($email) {
        $this->email = $email;
    }
 
    public function getContrasenna() {
        return $this->Contrasenna;
    }
 
    public function setContrasenna($contrasenna) {
        $this->Contrasenna = $contrasenna;
    }
    function getGenero() {
        return $this->genero;
    }

    function getFk_id_barrio() {
        return $this->fk_id_barrio;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setFk_id_barrio($fk_id_barrio) {
        $this->fk_id_barrio = $fk_id_barrio;
    }

     
    public function save(){
        $query="INSERT INTO usuario (Dni_usuario,Nombre,Email,Contrasenna,Fecha_nacimiento,genero,fk_id_barrio)
                VALUES('".$this->Dni."',
                       '".$this->nombre."',
                       '".$this->email."',
                       '".$this->Contrasenna."',
                       '".$this->fechaNac."',
                        '".$this->genero."',          
                       '".$this->fk_id_barrio."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
  public function update(){
    echo $query="UPDATE usuario SET Nombre='$this->nombre',Email='$this->email', Contrasenna='$this->Contrasenna', Fecha_nacimiento='$this->fechaNac', genero='$this->genero', fk_id_barrio='$this->fk_id_barrio' where Dni_usuario='$this->Dni' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
public function getAllUsers() {
        $query = $this->db()->query("SELECT usuario.*, barrio.nombre as NombreBarrio FROM usuario inner join barrio on usuario.fk_id_barrio=barrio.id_barrio");
            
           $resultSet=null;
          while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }
}
?>
