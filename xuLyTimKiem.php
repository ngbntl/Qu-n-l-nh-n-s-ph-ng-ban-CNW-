<?php

require 'connect.php';
error_reporting(E_ALL); ini_set('display_errors', '1');


if (isset($_POST['search']) && isset($_POST['value'])) {
    $search = $_POST['search'];
    $value = $_POST['value'];

    if ($search == 'idnv') {
        $sql1 = "SELECT * FROM `nhan vien` WHERE IDNV='$value'";
        $result1 = $conn->query($sql1);

        echo '<table border="1" width="100%">';
        echo '<tr>';
        echo '<th>IDNV</th>';
        echo '<th>Ho ten</th>';
        echo '<th>IDPB</th>';
        echo '<th>Dia chi</th>';
        echo '</tr>';

        while ($row = mysqli_fetch_array($result1)) {
            echo '<tr>';
            echo '<td>' . $row['IDNV'] . '</td>';
            echo '<td>' . $row['Họ và tên'] . '</td>';
            echo '<td>' . $row['IDPB'] . '</td>';
            echo '<td>' . $row['Địa chỉ'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        $conn->close();
    }

   if($search == 'hoTen'){
    $sql2 = "SELECT * FROM `nhan vien` WHERE  `Họ và tên` ='$value'";
    $result2 = $conn->query($sql2);
    echo '<table border="1" width="100%">';
        echo '<tr>';
        echo '<th>IDNV</th>';
        echo '<th>Ho ten</th>';
        echo '<th>IDPB</th>';
        echo '<th>Dia chi</th>';
        echo '</tr>';

        while ($row = mysqli_fetch_array($result2)) {
            echo '<tr>';
            echo '<td>' . $row['IDNV'] . '</td>';
            echo '<td>' . $row['Họ và tên'] . '</td>';
            echo '<td>' . $row['IDPB'] . '</td>';
            echo '<td>' . $row['Địa chỉ'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        $conn->close();
   }

   if($search == 'diaChi'){
    $sql2 = "SELECT * FROM `nhan vien` WHERE  `Địa chỉ` ='$value'";
    $result3 = $conn->query($sql2);
    echo '<table border="1" width="100%">';
        echo '<tr>';
        echo '<th>IDNV</th>';
        echo '<th>Ho ten</th>';
        echo '<th>IDPB</th>';
        echo '<th>Dia chi</th>';
        echo '</tr>';

        while ($row = mysqli_fetch_array($result3)) {
            echo '<tr>';
            echo '<td>' . $row['IDNV'] . '</td>';
            echo '<td>' . $row['Họ và tên'] . '</td>';
            echo '<td>' . $row['IDPB'] . '</td>';
            echo '<td>' . $row['Địa chỉ'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        $conn->close();
   }
}

?>