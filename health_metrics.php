<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysqldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "connection successfull";
// SQL to create table
$sql = "CREATE TABLE health_metrics (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Exercise INT NOT NULL,
    calories_consumed INT NOT NULL,
    sleep INT NOT NULL,
    water_consumed INT NOT NULL,
    Health_status VARCHAR(20),
    Date DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();

?>
