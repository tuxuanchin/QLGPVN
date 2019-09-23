<?php
    class Database{
        private $hostname='localhost:3306';
        private $username='root';
        private $pass='2411';
        private $dbname='quanlygiapha';
        
        private $conn=null;
        private $result=null;


        public function Connect(){
            $this -> conn= new mysqli($this -> hostname, $this -> username, $this -> pass, $this -> dbname);
            if(!$this->conn){
                echo 'ket noi that bai';
                exit();
            }
            else{
                mysqli_set_charset($this->conn, 'utf-8');
                echo 'ket noi thanh cong';
            }
            return $this->conn;
        }
    
    }


?>