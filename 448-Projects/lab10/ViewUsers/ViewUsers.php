<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "willthomas", "ANahy9ui", "willthomas");

if ($mysqli->connect_error) {
    die("Connect Failed: ". $mysqli->connect_error);
}

$checkQuery = "select * from Users;";

$result = $mysqli->query($checkQuery);

echo "<h1>Database Response</h1>";
echo "<h2>Current Users:</h2>";
echo "<table style='border: 1px solid black;'>";
echo "<th style='border: 1px dashed black;'>User ID</th>";
while ($row = $result->fetch_row()) {
    // Already in DB
    echo "<tr><td>User: $row[0]</td></tr>";
    
}
echo "</table>";

echo "<a href='../AdminHome.html'>Admin</a>";

$result->free();

$mysqli->close();

?>