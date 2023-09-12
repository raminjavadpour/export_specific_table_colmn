<?php
// Database connection settings
$servername = "localhost"; // Replace with your database server name
$username = "atrintajhiz_mobin"; // Replace with your database username
$password = "en!=1(_u#pd6"; // Replace with your database password
$dbname = "atrintajhiz_radtestc_wplast"; // Replace with your database name

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
