<?php 

    $SERVER_NAME = "localhost";
    $DATABASE_NAME = "todolist";
    $USERNAME = "root";
    $PASSWD = "";

    $conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWD, $DATABASE_NAME);

    if($conn->connect_error) 
        echo "Connection failed: " . $conn->connect_error;

?>