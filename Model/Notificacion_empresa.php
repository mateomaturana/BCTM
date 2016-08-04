<?php
class Notificacion_empresa extends EntidadBase{
    private $Nit_empresa;
    private $Dni_usuario;
    private $fecha_registro;
    private $Comentario ;
    private $Tipo_notificacion ;
    
    
    
     
    public function __construct($adapter) {
        $table="notificacion_empresa";
        parent::__construct($table, $adapter);
    }
    function getNit_empresa() {
        return $this->Nit_empresa;
    }

    function setNit_empresa($Nit_empresa) {
        $this->Nit_empresa = $Nit_empresa;
    }

        public function getDni_usuario() {
        return $this->Dni_usuario;
    }
 
    public function setId($Dni_usuario) {
        $this->Dni_usuario = $Dni_usuario;
    }
     
    public function getfecha_registro() {
        return $this->fecha_registro;
    }
 
    public function setfecha_registro($fecha_registro) {
        $this->fecha_registro = $fecha_registro;
    }
 
    
 
    public function getComentario() {
        return $this->Comentario;
    }
 
    public function setComentario($Comentario) {
        $this->Comentario = $Comentario;
    }
 
    public function getTipo_notificacion() {
        return $this->Tipo_notificacion;
    }
 
    public function setTipo_notificacion($Tipo_notificacion) {
        $this->Tipo_notificacion = $Tipo_notificacion;
    }
   
     
    public function save(){
        $query="INSERT INTO notificacion_empresa(Nit_empresa, Dni_usuario, fecha_registro, Comentario , Tipo_notificacion)
                VALUES('".$this->Nit_empresa."',
                       '".$this->Dni_usuario."',
                       '".$this->fecha_registro."',
                       '".$this->Comentario."',
                       '".$this->Tipo_notificacion."');";
                        echo $query;
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
 public function update(){
    echo $query="UPDATE notificacion_empresa SET Dni_usuario='$this->Dni_usuario', fecha_registro='$this->fecha_registro', Comentario='$this->Comentario', Tipo_notificacion='$this->Tipo_notificacion' where Nit_empresa='$this->Nit_empresa' ";
       $update=$this->db()->query($query);
       if(!$update && DEBUG){
           echo 'Error en la base de datos: '.$this->db()->error;
       }
       return $update;
}
 public function getAllUsers() {
        $query = $this->db()->query("SELECT notificacion_empresa.*,empresa_transportadora.Nombre as Nombre_empresa FROM notificacion_empresa inner join empresa_transportadora on notificacion_empresa.Nit_empresa=empresa_transportadora.Nit_empresa");
            
           $resultSet=null;
          while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }
//    public function getByIdUser($id, $primaryKey) {
//        $query = $this->db()->query("SELECT notificacion_empresa.*,empresa_transportadora.Nombre as Nombre_empresa FROM notificacion_empresa inner join empresa_transportadora on notificacion_empresa.Nit_empresa=empresa_transportadora.Nit_empresa WHERE " .$primaryKey."=".$id);
//
//        if ($row = $query->fetch_object()) {
//            $resultSet = $row;
//        }
//
//        return $resultSet;
//    }
}
?>




