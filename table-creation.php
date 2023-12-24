<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dbtest23";
// Створення з'єднання
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Перевірка з'єднання
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1="SET NAMES utf8mb4;";
$sql2="SET CHARACTER SET utf8mb4;";
if (mysqli_query($conn, $sql1)) {
    echo "SET CHARACTER SET 1 successfully";
} else {
    echo "Error SET CHARACTER SET: " . mysqli_error($conn);
}


if (mysqli_query($conn, $sql2)) {
    echo "SET CHARACTER SET 2 successfully";
} else {
    echo "Error SET CHARACTER SET: " . mysqli_error($conn);
}
// запит SQL для створення таблиці
$sql = "CREATE TABLE MyGuests (
id INT AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(255) NOT NULL,
lastname VARCHAR(255) NOT NULL,
email VARCHAR(255),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);