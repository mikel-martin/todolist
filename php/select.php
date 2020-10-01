<?php 

    echo "Method: " . $_SERVER["REQUEST_METHOD"];
    if($_SERVER["REQUEST_METHOD"] == "POST")
        echo "PHP: " . $_POST["data"];

    include 'lib/db_connection.php';

    $query = "SELECT * FROM todos";
    $result = $conn->query($query);

    if($result->num_rows === 0) {
        echo "<h3>Nothing to do yet...</h3>";
        exit();
    }

    while($row = $result->fetch_assoc()) {
        echo "
            <div id='" . $row["id"] ."' 
                class='list-item'
                draggable='true' ondragstart='drag(event)'>
                <span hidden>" . $row["id"] . "</span>
                <button class='collapse-btn'>
                    " . ucfirst($row["title"]) . "
                    <span class='item-date'>" . $row["postdate"] . "</span>
                </button>
                <div class='list-item-more collapsable'>
                    " . $row["descptn"] .  "
                </div>
            </div>
        ";
    }

    $conn->close();

?>