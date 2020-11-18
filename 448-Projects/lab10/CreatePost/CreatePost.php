<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "willthomas", "ANahy9ui", "willthomas");

$userId = $_POST["userId"];
$content = $_POST["content"];

if ($mysqli->connect_error) {
    die("Connect Failed: ". $mysqli->connect_error);
}

echo "<h1>Database Response</h1>";

// Verify User Exists

$existingUser = True;

$checkQuery = "select * from Users where user_id = \"$userId\";";

$result = $mysqli->query($checkQuery);

if (!($result->fetch_row()[0])) {
    $existingUser = False;
    echo "<h3>User does not exist, <a href='../CreateUser/CreateUser.html'>create user</a> before posting</h3>";
}

$insertQuery = "INSERT INTO Posts (content, author_id) values (\"$content\", \"$userId\");";

if ($existingUser) {
    $mysqli->query($insertQuery);
    echo "<h3>New Post added for '$userId'</h3>";
}

$result->free();

$mysqli->close();

?>