<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest23";
// Створення з'єднання 
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8mb4");
// Перевірка з'єднання 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO MyGuests (firstname, lastname, email) 
 VALUES ('Діана', 'Каба', 'diana@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();