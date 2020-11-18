<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "willthomas", "ANahy9ui", "willthomas");

if ($mysqli->connect_error) {
    die("Connect Failed: ". $mysqli->connect_error);
}

$userId = $_POST['userId'];

$checkQuery = "SELECT post_id, content FROM Posts where author_id = '$userId';";

$postId = 0;
$content = 1;

$result = $mysqli->query($checkQuery);

echo "<h1>Database Response</h1>";
echo "<h2><b style='text-decoration: underline;'>$userId</b>'s Posts:</h2>";
echo "<table style='border: 1px solid black;'>";
echo "<th style='border: 1px dashed black;'>POST ID</th>";
echo "<th style='border: 1px dashed black;'>POST</th>";
while ($row = $result->fetch_row()) {
    // Already in DB
    echo "<tr><td>$row[$postId]</td><td>$row[$content]</td></tr>";
    
}
echo "</table>";

echo "<a href='../AdminHome.html'>Admin</a>";

$result->free();

$mysqli->close();

?>