<?php
    // connect database 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "12345678";
    $db_name = "exam";

    // connect database
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8");

    // check connection error 
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        // connect success, do nothing
        // echo "Connect success.";
    }
    
    $sql = "SELECT * FROM author";
    $result = $mysqli->query($sql);

    $arr = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_object())
        {
            $arr[] = $row;
        }
    }

    echo json_encode($arr);
