<?php
require 'connect.php';
// Kiểm tra xem có dữ liệu được gửi từ form 'search' không
if (isset($_POST['search'])) {
    // Chuẩn bị và thực thi câu truy vấn để lấy thông tin phòng ban
    $stmt = $conn->prepare("SELECT * FROM `phong ban` WHERE IDPB = ?");
    $stmt->bind_param("s", $_POST['idpb']); // "s" nghĩa là kiểu dữ liệu là string
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row) {
            // Thông tin được lấy ra để hiển thị trên form
            $idpb = $row['IDPB'];
            $tenpb = $row['Tên Phòng Ban'];
            $mota = $row['Mô tả'];
        } else {
            echo 'Phòng ban không tìm thấy.';
        }
    } else {
        echo 'Lỗi khi thực thi câu truy vấn.';
    }
    $stmt->close();
}
// Kiểm tra xem có dữ liệu từ form 'update' không
if (isset($_POST['update'])) {
    // Chuẩn bị câu truy vấn update
    $stmt = $conn->prepare("UPDATE `phong ban` SET `Tên Phòng Ban` = ?, `Mô tả` = ? WHERE `IDPB` = ?");
    $stmt->bind_param("sss", $_POST['tenpb'], $_POST['mota'], $_POST['idpb']);
    if ($stmt->execute()) {
        echo 'Cập nhật thành công.';
    } else {
        echo 'Lỗi khi cập nhật thông tin.';
    }
    $stmt->close();
}
?>
<!-- Form để tìm phòng ban -->
<div class="form" style="position: relative; text-align: center;">
    <form action="" method="post">
        <label for="idpb">IDPB:</label>
        <input type="text" name="idpb" id="idpb" required><br><br>
        <input type="submit" name="search" value="Search">
    </form>
</div>
<!-- Form để cập nhật thông tin phòng ban (nếu đã tìm thấy thông tin) -->
<?php if (isset($idpb)): ?>
    <div class="kqua" style="position: relative; text-align:center; margin-top:50px;">
        <form action="" method="post">
            <input type="hidden" name="idpb" value="<?php echo htmlspecialchars($idpb); ?>">
            <label for="">Tên phòng ban:</label>
            <input type="text" name="tenpb" value="<?php echo htmlspecialchars($tenpb); ?>"><br><br>
            <label for="">Mô tả:</label>
            <input type="text" name="mota" value="<?php echo htmlspecialchars($mota); ?>"><br><br>
            <input type="submit" name="update" value="Update">
        </form>
    </div>
<?php endif; ?>