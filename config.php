<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "myform";

    //Create connection
    $conn = mysqli_connect($host, $username, $password, $db);
    
    //Check connection
    if(!$conn){
        echo "Connection failed: " . mysqli_connect_error();
    }
  
?>