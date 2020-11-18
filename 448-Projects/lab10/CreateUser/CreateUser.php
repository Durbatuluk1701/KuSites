<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "willthomas", "ANahy9ui", "willthomas");

$userId = $_POST["userId"];

if ($mysqli->connect_error) {
    die("Connect Failed: ". $mysqli->connect_error);
}

$checkQuery = "select * from Users where user_id = \"$userId\";";

$insertQuery = "INSERT INTO Users (user_id) values (\"$userId\");";

// echo $insertQuery;
// echo $checkQuery;

$result = $mysqli->query($checkQuery);
// echo $result2;
echo "<h1>Database Response</h1>";
if ($result->fetch_row()[0]) {
    // Already in DB
    echo "<h3>User '". $userId . "' Already in the Database, cannot duplicate users</h3>";
    
} else {

    $mysqli->query($insertQuery);
    echo "<h3>Successfull Inserted '" . $userId . "' into Database</h3>";
}

$mysqli->close();

?>