<?php
$host = 'localhost';
$db = 'ubbdb';
$user = 'ubb';
$password = 'Motion12@';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
