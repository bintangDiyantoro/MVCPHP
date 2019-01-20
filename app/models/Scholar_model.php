<?php 

class Scholar_model{
    private $dbh; //database handler
    private $stmt; //statement

    public function __construct(){
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'najmuddin','stonehe4ded');
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllSch(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM scholars');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}