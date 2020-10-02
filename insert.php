<?php 

    include 'php/lib/db_connection.php';
    include 'php/lib/input.php';

    $title = proccessInput($_POST["title"]);
    $descptn = proccessInput($_POST["descptn"]);

    if($name === "" || $descptn === "")
        exit();

    $query = "INSERT INTO todos (title, descptn) 
        VALUES('" . $title . "', '" . $descptn . "')";
    
    if($conn->query($query) === FALSE)
        echo "Failed to save item... UPS!</br>" . $conn->error;

    $conn->close();

    echo "
        <script>
            window.location.replace('/todolist/');
        </script>
    ";

?>