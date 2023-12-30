<?php
header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest23";
// Створення з'єднання
$conn = new mysqli($servername, $username, $password, $dbname);
// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
$n = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $n++;
        echo "<p>$n Name: " . $row["firstname"] . " " . $row["lastname"] . "\n</p>";
    }
} else {
    echo "0 results";
}
$conn->close();