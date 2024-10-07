<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scavanger_hunt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$teamName = $_POST['teamName'];
$teamId = $_POST['teamId'];
$points = $_POST['points'];
$timeTaken = $_POST['timeTaken'];

// Insert data into the database
$sql = "INSERT INTO rd1 (team_name, team_id, points, time_taken) 
        VALUES ('$teamName', '$teamId', '$points', '$timeTaken')";

if ($conn->query($sql) === TRUE) {
    echo "Game data saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
