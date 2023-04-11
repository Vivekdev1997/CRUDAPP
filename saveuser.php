<?php

print_r($_POST);
// die;
$name = $_POST["name"];
$age = $_POST["age"];
$mobile = $_POST["mobile"];
$city = $_POST["city"];

include('dbconnect.php');

$sql = "INSERT INTO user VALUES ('','$name', '$age', '$mobile','$city')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
    header("Location: read.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
