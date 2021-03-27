<?php 

    include "db.php" ; 
    
    class FindData{

        public static function findAllArticle(){
            $conn = DB::getConnect();
            $result = $conn->query("SELECT * FROM article");
            return ($conn->affected_rows>0)?$result:null;
        }

        public static function findOneArticle($article_id){

            $conn = DB::getConnect();
            $result = $conn->query("SELECT * FROM article WHERE id = '".$article_id."'");
            return ($conn->affected_rows>0)?$result:null;

        }
    }
?>
