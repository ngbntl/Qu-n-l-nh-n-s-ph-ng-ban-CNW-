<?php
require 'connect.php';

if (isset($_GET['id'])) {
    $idpb = $_GET['id'];

    $sql = "SELECT * FROM `nhan vien` WHERE IDPB = '$idpb'";
    $result = $conn->query($sql);

    echo '<table border="1" width="100%">';
    echo '<caption style="padding:20px;">
    <h3>Thông tin nhân viên của '.$idpb.' </h3>
</caption>';
echo '<TR?>
<TH>IDNV</TH>
<TH>Ho ten</TH>
<TH>IDPB</TH>
<TH>Dia chi</TH>
</TR>';

while ($row = mysqli_fetch_array($result)) {
echo
'<TR>
    <TD>' . $row['IDNV'] . '</TD>
    <TD>' . $row['Họ và tên'] . '</TD>
    <TD>' . $row['IDPB'] . '</TD>
    <TD>' . $row['Địa chỉ'] . '</TD>
</TR>';
}

echo '</table>';
}

$conn->close();
?>