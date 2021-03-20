<?php 

    $dbLocalhost = mysqli_connect("localhost", "root", "12345678", "exam") 
        or die ("Could not connect: ".mysqli_connect_error());

    $sql_statement = "DELETE FROM author WHERE authorID = ".$_GET['authorID']." ";
    $dbAuthor = mysqli_query($dbLocalhost, $sql_statement);

    // echo $sql_statement ;
    if($dbAuthor){
        header("location: show_author.html");
    }

?>