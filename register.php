<?php
include "db.php";

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "User already registered.";
} else {
    $insert = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($insert)) {
        echo "Registration successful.";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
