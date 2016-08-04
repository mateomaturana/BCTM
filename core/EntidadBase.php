<?php

class EntidadBase {

    private $table;
    private $db;
    private $conectar;

    public function __construct($table, $adapter) {
        $this->table = (string) $table;

        /*
          require_once 'Conectar.php';
          $this->conectar=new Conectar();
          $this->db=$this->conectar->conexion();
         */
        $this->conectar = null;
        $this->db = $adapter;
    }

    public function getConetar() {
        return $this->conectar;
    }

    public function db() {
        return $this->db;
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM $this->table");
            
           $resultSet=null;
          while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }
 
     

    public function getById($id, $primaryKey) {
        $query = $this->db->query("SELECT * FROM $this->table WHERE " .$primaryKey."=".$id);

        if ($row = $query->fetch_object()) {
            $resultSet = $row;
        }

        return $resultSet;
    }

    public function getBy($column, $value) {
        $query = $this->db->query("SELECT * FROM $this->table WHERE $column='$value'");

        while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }

    public function deleteById($id) {
        $query = $this->db->query("DELETE FROM $this->table WHERE id=$id");
        return $query;
    }

    public function deleteBy($column, $value) {
        $query = $this->db->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }
public function getByIdUserNot($id, $primaryKey) {
        $query = $this->db()->query("SELECT notificacion_empresa.*,empresa_transportadora.Nombre as Nombre_empresa FROM notificacion_empresa inner join empresa_transportadora on notificacion_empresa.Nit_empresa=empresa_transportadora.Nit_empresa WHERE " .$primaryKey."=".$id);

        if ($row = $query->fetch_object()) {
            $resultSet = $row;
        }

        return $resultSet;
    }
    /*
     * Aqui podemos montarnos un monton de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */
}

?>