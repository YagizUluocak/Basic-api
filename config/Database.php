<?php
class Database{
    //Db Parameters
    private $host = 'localhost';
    private $db_name = 'test-api';
    private $username = 'root';
    private $password = '';
    private $connect;

    //Db Connect
    public function connect(){
        $this->connect =null;
        
        try {
            $this->connect = new PDO('mysql:host='. $this->host . ';dbname='. $this->db_name, $this->username, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            echo "Connection failed: ". $e->getMessage();

        }

        return $this->connect;
    }
}
?>