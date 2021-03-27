<?php 
    class DB{
        
        public static function getConnect(){
            $database = "blog";
            $conn = new mysqli("localhost","root","12345678",$database);
            if($conn->connect_errno){
                 echo "error connect DB".$conn->error;
            }
            $conn->charset = "utf8mb4";
            return $conn;
        }
    }
?>
