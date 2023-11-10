<?php
require 'connect.php';
$sql = "SELECT * FROM `nhan vien`";
$rs = $conn->query($sql);
echo '<table border="1" width="100%">';
echo '<caption style="padding:20px"><h3>Xóa nhân viên</h3></caption>';
echo '<tr><th>IDNV</th>
          <th>Ho ten</th>
          <th>IDPB</th>
          <th>Dia chi</th>
          <th>Xóa</th>
      </tr>';

while ($row = $rs->fetch_assoc()) {
    echo '<tr>
              <td>' . $row['IDNV'] . '</td>
              <td>' . $row['Họ và tên'] . '</td>
              <td>' . $row['IDPB'] . '</td>
              <td>' . $row['Địa chỉ'] . '</td>
              <td>
                  <input type="checkbox" name="delete[]" form="delete-form" value="' . htmlspecialchars($row['IDNV']) . '">
              </td>
          </tr>';
}
echo '</table>';
echo '
<form action="" method="post" id="delete-form">
    <div style="position:relative; margin: 100px 500px;">
        <button type="submit" name="deleteSelected">Xóa</button>
        <button type="submit" name="deleteAll">Xóa tất cả</button>
    </div>
</form>';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['deleteSelected']) && isset($_POST['delete']) && is_array($_POST['delete'])) {

        $idnvToDelete = $_POST['delete'];
        foreach ($idnvToDelete as $idnv) {

            $stmt = $conn->prepare("DELETE FROM `nhan vien` WHERE IDNV = ?");
            $stmt->bind_param("s", $idnv);
            $stmt->execute();
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } elseif (isset($_POST['deleteAll'])) {
        $deleteAllSql = "DELETE FROM `nhan vien`";
        $conn->query($deleteAllSql);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>