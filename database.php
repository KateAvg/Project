<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_workshop";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}


$conn->select_db($dbname);


$tablesql = "CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    service VARCHAR(50) NOT NULL,
    prefered_date DATE NOT NULL,
    prefered_time TIME NOT NULL,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($tablesql) === TRUE) {
    echo "Table 'bookings' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$conn->close();
?>
