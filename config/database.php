<?php 
    class Database {
        private $host = "den1.mysql5.gear.host";
        private $database_name = "skoderapi";
        private $username = "skoderapi";
        private $password = "Ww1VWu-Q8?0V";

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>