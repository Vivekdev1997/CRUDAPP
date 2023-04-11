<?php

$id = intval($_GET['id']);
// print_r($id);
include('dbconnect.php');

$sql = "DELETE FROM user where id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully"; 
    header("Location: read.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
# crudphp Core PHP CRUD App.

All Files in app--

1.Create User

2.Read Users List

3.Update User

4.Delete User

Guide Steps to set in local system.

1.Download All files

2.Paste in local htdocs in a folder

3.Start Xampp apache and mysql.

4.Create database name 'test'.

5.Then in downloaded file there is user.sql file, open the and copy.

6.Run on sql section in xampp (It creates user table and put some data into table).

7.Then run on browser.