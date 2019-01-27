<?php 

class Scholar_model{
    private $table = 'scholars';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllSch(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getSchById($id){
        $this->db->query('SELECT * FROM '. $this->table.' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}