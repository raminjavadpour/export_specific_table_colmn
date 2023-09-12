<?php
// Database connection settings
$servername = "localhost"; // Replace with your database server name
$username = "db user"; // Replace with your database username
$password = "db password"; // Replace with your database password
$dbname = "db name"; // Replace with your database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve user_login values
$sql = "SELECT user_login FROM wp_users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "User Login: " . $row["user_login"] . "<br>";
    }
} else {
    echo "No users found in the database.";
}

// Close the database connection
$conn->close();
?>
