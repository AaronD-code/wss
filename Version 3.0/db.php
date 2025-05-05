
<?php
$host = "localhost";  // or "localhost"
$username = "root";  // default in Laragon
$password = "Howimetyourmother2003!";  // no password by default
$database = "asc_motors";  // replace with your actual database name

// Create MySQLi connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";  // Uncomment to test the connection
?>