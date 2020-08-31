<?php
    class database{

    private $conn = NULL;
    private $host = 'localhost';
    private $user = 'root';
    private $passw = '';
    private $db = 'test';
    private $result = NULL;
    private function connect(){
     $this->conn=new mysqli($this->host,$this->user, $this->passw, $this->db) or die('connect fail');  
    }

    // SELECT DATA FROM MYSQL
    public function select($sql){
        $this->connect();
        $this->result = $this->conn->query($sql);
    }
    public function fetch(){
        if($this->result->num_rows > 0){
            $rows = $this->result->fetch_assoc();
        }else{
            $rows = 0;
        }
        return $rows;
    }
    // insert delete update
    public function command($sql){
        $this->connect();
        $this->conn->query($sql);
    }
}
?>