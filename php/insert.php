<?php 

    include './lib/input.php';
    include './lib/db_connection.php';

    if($_SERVER["REQUEST_METHOD"] != "POST")
        exit();

    $name = proccessInput($_POST["nameInput"]);
    $lastname = proccessInput($_POST["lastnameInput"]);
    $email = proccessInput($_POST["emailInput"]);

    if($name === "" || $lastname === "" || $email === "")
        exit();

    $id = rand(1000, 9999);
    $date = date('y-d-m');

    $insert = "INSERT INTO myguests 
        (id, firstname, lastname, email, reg_date) VALUES(
        " . $id . ", 
        '" . $name . "', 
        '" . $lastname . "', 
        '" . $email . "',
        " . $date . "
        )";

    if($conn->query($insert) === TRUE) {
        echo "user saved successfullly";
    } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }

    $_POST["nameInput"] = "";
    $_POST["lastnameInput"] = "";
    $_POST["emailInput"] = "";

    $conn->close();

?>