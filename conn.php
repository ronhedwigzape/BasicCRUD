<?php
# Initialize connection variables
$host = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

# Connect to the MySQL database
$conn = mysqli_connect($host, $username, $password, $dbname,4306);

# Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}