<?php

// get jsPOST data
$name = $_POST['name'];

// Connect to the database 
include '../../connect/connect.php';

// add the user
$stmt = $mysqli->prepare("INSERT INTO user (display_name) VALUES (?)");
$stmt->bind_param("s", $name);

// Execute the SQL statement 
if ($stmt->execute()) {
    echo "user added! ~your friendly php output";
}

// Close the connection 
include '../../connect/disconnect.php';


?>