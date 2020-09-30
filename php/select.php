<?php 

    include './lib/db_connection.php';

    $query = "SELECT title, descptn, postdate FROM todos";
    $result = $conn->query($query);
    
    if($result->num_rows === 0) {
        echo "<h3>Nothing to do yet...</h3>";
        exit();
    }

    while($row = $result->fetch_assoc()) {
        echo "
            <div class='list-item'>
                <button class='del-btn'>
                    <i class='material-icons'>close</i>
                </button>
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