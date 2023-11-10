<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 style="position:relative; left:43%;">Chèn thông tin nhân viên</h2>
    <form action="XuLyChenNv.php" method="post" target="result">
        <div class="input">
            <label for="idnv">IDNV: </label><input type="text" id="idnv" name="idnv"></br>
        </div>
        <div class="input">
            <label for="hoten">Họ tên: </label><input type="text" id="hoten" name="hoten"></br>
        </div>

        <div class="input">
            <label for="idpb">IDPB: </label>
            <input type="text" id="idpb" name="idpb"></br>
        </div>
        <div class="input"> <label for="diachi">Địa chỉ: </label><input type="text" id="diachi" name="diachi"></br>
        </div>

        <input class="btn" type="submit" value="Chèn thông tin">
    </form>

    <iframe name="result" style="width: 100%; height: 400px; border: none; margin-top:2%;"></iframe>
</body>
<style>
.input {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    width: 50%;
    padding: 20px;
    box-sizing: border-box;
    left: 38%;

}

.btn {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    left: 45%;
}
</style>

</html>