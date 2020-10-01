<?php 

    include 'php/lib/db_connection.php';

    $id = $_POST["data"];

    $query = "DELETE FROM todos WHERE id=" . $id;
    
    if($conn->query($query) === FALSE)
        echo "Failed to delete item... UPS!</br>" . $conn->error;

    $conn->close();

?>