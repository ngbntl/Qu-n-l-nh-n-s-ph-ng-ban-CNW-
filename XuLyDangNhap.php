<?php
require 'connect.php';
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `username` = ? AND `password` = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            header("Location: ./HomeAdmin.php");
            exit;
        } else {
            echo 'Tên người dùng hoặc mật khẩu không chính xác.'; // Incorrect username or password message
        }
    } else {
        echo 'Không thể thực hiện truy vấn.'; // Query execution failed message
    }
} else {
    echo 'Vui lòng nhập tên người dùng và mật khẩu.'; // Please enter username and password message
}
?>