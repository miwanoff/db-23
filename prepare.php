<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} // prepare and bind

$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);// set parameters and execute

$firstname = "John21";
$lastname = "Doe21";
$email = "john21@example.com";
$stmt->execute();

$firstname = "Mary21";
$lastname = "Moe21";
$email = "mary21@example.com";
$stmt->execute();