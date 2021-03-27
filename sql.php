<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

    class Sql extends PDO {
        
        private $conn;


        public function __construct(){
        
        $this->conn = new PDO("mysql:host=localhost;dbname=livraria", "vitor","1914");

        }



        private function setParams($statement, $parameters = array()){
            
            foreach ($parameters as $key => $value) {
                   $this->setParam($statement, $key, $value);
            }

        }

        private function setParam($statement, $key, $value){
                
                    $statement->bindParam($key,$value);
        

        }
    

        public function query($rawQuery, $params = array()){


                $stmt = $this->conn->prepare($rawQuery);
                
                $this->setParams($stmt,$params);

                $stmt->execute();
                return $stmt;
                
        }
        

        
        public function select($rawQuery,$params = array()):array{


            $stmt = $this->query($rawQuery,$params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);




        }




    }



?>