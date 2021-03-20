<?php 

    $dbLocalhost = mysqli_connect("localhost", "root", "12345678", "exam") 
        or die ("Could not connect: ".mysqli_connect_error());

    $sql_statement = "SELECT * FROM author";
    $dbAuthor = mysqli_query($dbLocalhost, $sql_statement);

    $getAuthor = array();
    while ($rows = mysqli_fetch_array($dbAuthor)) {

        $getAuthor[] = '{"authorID": '.$rows["authorID"].', "author": "'.$rows["author"].'", "penname": "'.$rows["penname"].'"}';
    }
    
    ## เปลี่ยน array เป็น String
    $jsonAuthor = '['.implode(",", $getAuthor).']';
    
    print $jsonAuthor;

?>