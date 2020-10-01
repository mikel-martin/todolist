<?php 

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $data = $_POST["id"];

        echo $data . " item is ggoing to be deleted!";

    }
    
?>