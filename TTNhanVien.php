<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect');
$db_select = mysqli_select_db($link, 'dulieu');

$rs = mysqli_query($link, "SELECT * FROM `nhan vien`");
echo '<table border="1" width="100%">';

echo '<caption style="padding:20px"><h3>Thông tin nhân viên</h3><Caption>';

echo '<TR?><TH>IDNV</TH>
<TH>Ho ten</TH>
<TH>IDPB</TH>
<TH>Dia chi</TH>
</TR>';
while ($row = mysqli_fetch_array($rs)) {
    echo
        '<TR>
    <TD>' . $row['IDNV'] . '</TD>
    <TD>' . $row['Họ và tên'] . '</TD>
    <TD>' . $row['IDPB'] . '</TD>
    <TD>' . $row['Địa chỉ'] . '</TD>
</TR>';
}

echo '<TABLE>';

mysqli_close($link);