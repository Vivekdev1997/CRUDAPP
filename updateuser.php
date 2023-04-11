<?php

print_r($_POST);
$name = $_POST["name"];
$age = $_POST["age"];
$mobile = $_POST["mobile"];
$city = $_POST["city"];
$id = $_POST["id"]; 
include('dbconnect.php');

$sql = "UPDATE user SET name = '$name', age='$age', mobile='$mobile', city='$city' where id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: read.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
