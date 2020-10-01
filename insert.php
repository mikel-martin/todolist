<?php 

    include 'php/lib/db_connection.php';

    $name = $_POST["title"];
    $descptn = $_POST["descptn"];

    $query = "INSERT INTO todos (title, descptn) 
        VALUES('" . $name . "', '" . $descptn . "')";
    
    if($conn->query($query) === FALSE)
        echo "Failed to save item... UPS!</br>" . $conn->error;

    $conn->close();

    echo "
        <script>
            window.location.replace('/todolist/');
        </script>
    ";

?>