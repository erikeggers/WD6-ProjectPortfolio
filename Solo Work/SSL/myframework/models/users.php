<?php
class users {
    public function __construct($parent){
        $this->db = $parent->db;
        //var_dump($this->db);
    }
    public function select($sql, $value=array()) {
        $this->sql = $this->db->prepare($sql);
        $result = $this->sql->execute($value);
        $data = $this->sql->fetchAll();
        return $data;
    }
    public function add($sql, $value=array()) {
        $this->sql = $this->db->prepare($sql);
        $result = $this->sql->execute($value);
    }
    public function delete($sql, $value=array()) {

    }
    public function update($sql, $value=array()) {

    }
}
?>