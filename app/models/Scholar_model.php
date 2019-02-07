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

    public function insertScholar($data){
        $query = 'INSERT INTO '.$this->table.' (name, nis, email, department) VALUES(:name, :nis, :email, :department)';
        
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('department', $data['department']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteScholar($id){
        $query = 'DELETE FROM '.$this->table.' WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateScholar($data){
        $query = 'UPDATE '.$this->table.' SET name= :name, nis= :nis, email= :email, department= :department WHERE id= :id';
        
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('department', $data['department']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}