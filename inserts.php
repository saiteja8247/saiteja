<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysqldb";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($link->connect_error) {
    die("ERROR: Could not connect. " . $link->connect_error);
}
echo 'Connected successfully<br>';

// Fetching values from HTML form
$Exercise = $_POST['Exercise'];
$calories_consumed = $_POST['calories_consumed'];
$sleep = $_POST['sleep'];
$water_consumed = $_POST['water_consumed'];
$Date = $_POST['Date'];

// Determine Health_status based on the input values
$status = determineHealthStatus($Exercise, $calories_consumed, $sleep, $water_consumed);

// Function to determine health status (example logic)
function determineHealthStatus($exercise, $calories, $sleep, $water) {
    if ($exercise >= 30 && $calories <= 2000 && $sleep >= 7 && $water >= 8) {
        return 'Good';
    } else {
        return 'Needs Improvement';
    }
}

// Escaping user inputs for security
$Exercise = mysqli_real_escape_string($link, $Exercise);
$calories_consumed = mysqli_real_escape_string($link, $calories_consumed);
$sleep = mysqli_real_escape_string($link, $sleep);
$water_consumed = mysqli_real_escape_string($link, $water_consumed);
$Date = mysqli_real_escape_string($link, $Date);
$status = mysqli_real_escape_string($link, $status);

// SQL query to insert data
$sql = "INSERT INTO health_metrics (Exercise, calories_consumed, sleep, water_consumed, Health_status, Date) 
        VALUES ('$Exercise', '$calories_consumed', '$sleep', '$water_consumed', '$status', '$Date')";

// Attempt to execute the query
if ($link->query($sql) === TRUE) {
    echo "Records added successfully";
} else {
    echo "ERROR: Could not execute query. " . $link->error;
}

// Close connection
$link->close();
?>
