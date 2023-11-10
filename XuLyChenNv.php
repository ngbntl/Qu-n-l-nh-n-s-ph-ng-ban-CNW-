<?php
require 'connect.php';

if (isset($_POST['idnv']) && isset($_POST['hoten']) && isset($_POST['idpb']) && isset($_POST['diachi'])) {
    $idnv = $_POST['idnv'];
    $hoten = $_POST['hoten'];
    $idpb = $_POST['idpb'];
    $diachi = $_POST['diachi'];

    $sql = "INSERT INTO `nhan vien` (`IDNV`, `Họ và tên`, `IDPB`, `Địa chỉ`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $idnv, $hoten, $idpb, $diachi);

    if ($stmt->execute()) {
       header('Location: TTNhanVien.php');
    } else {
        echo "Thêm nhân viên thất bại: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>