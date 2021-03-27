<?php 
    include "database/db.php" ; 
    if(isset($_POST["head"]) || isset($_POST["editor1"])){
        $filename = "";
        if(isset($_FILES['file']['name'])){

            $filename = $_FILES['file']['name'];
            $location = "image/".$filename;
            if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
                $response = "Upload Successful";
            }
        }

        $conn = DB::getConnect();
        $sql = "INSERT INTO article(name, head_img, descript) VALUES(
            '".$_POST["head"]."',
            '".$filename."',
            '".$_POST["editor1"]."'
            )";

        if ($conn->query($sql)) {
            echo "add_success";
        } else {
            echo "add_error";
        }
    }

?>