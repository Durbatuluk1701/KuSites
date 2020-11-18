<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "willthomas", "ANahy9ui", "willthomas");

if ($mysqli->connect_error) {
    die("Connect Failed: ". $mysqli->connect_error);
}

$checkQuery = "SELECT post_id, content, author_id FROM Posts;";

$result = $mysqli->query($checkQuery);

echo "<h1>Database Response</h1>";
$kill = [];
while ($row = $result->fetch_row()) {
    if ($_POST[$row[0]] == 'on') {
        $mysqli->query("DELETE FROM Posts where post_id = $row[0];");
        echo "<h3>Deleted Post Id: $row[0]</h3>";
    }
    
}

echo "<a href='../AdminHome.html'>Admin</a>";

$result->free();

$mysqli->close();

?>