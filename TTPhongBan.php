<?php

require 'connect.php';

$sql = "SELECT * FROM `phong ban`";

$result = $conn->query($sql);

echo '<table border="1" width="100%">';

echo '<caption style="padding:20px;"> <h3>Thông tin phòng ban</h3> <Caption>';

echo '<TR?>

<TH>IDPB</TH>

<TH>Tên Phòng Ban</TH>

<TH>Mô tả</TH>

<TH>Chi tiết</TH>

</TR>';


while ($row = mysqli_fetch_array($result)) {

    echo

        '<TR>

    <TD>' . $row['IDPB'] . '</TD>

    <TD>' . $row['Tên Phòng Ban'] . '</TD>

    <TD>' . $row['Mô tả'] . '</TD>

    <TD>

        <a href="TTNhanVienTheoPB.php?id=' . $row['IDPB'] . '">Xem chi tiết</a>

    </TD>

</TR>';

}

echo '</TABLE>';

$conn->close();

?>