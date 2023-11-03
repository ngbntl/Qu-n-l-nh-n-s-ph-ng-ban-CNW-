<?php
$severname = "localhost";
$username = "root";
$password = "";
$db_name = "dulieu";

$conn = new mysqli($severname, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
} else {
    
}