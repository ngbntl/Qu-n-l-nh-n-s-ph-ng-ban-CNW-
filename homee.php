<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        font-family: "Times New Roman", sans-serif;
        /*font-size: 34px;*/
        color: #111;
        line-height: 1.15;
        background-color: #F0FFFF;
    }

    .wrapper {

        margin: 0 auto;

    }

    .head {

        height: 40px;

        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #b0b9c0;
    }

    .head h3 {
        padding-top: 10px;
    }

    .body {

        height: 1080px;
    }

    .left {

        width: 200px;
        height: 100%;
        float: left;
        background-color: rgb(241, 241, 241);
    }

    .left li {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
        font-weight: bold;
        color: #685f5f;
        padding: 10px;
        height: 40px;
        list-style: none;
        text-align: center;
    }

    .left li:hover {
        background-color: rgb(149, 231, 231);
        color: #F0FFFF;
        cursor: pointer;
    }

    .left a {
        text-decoration: none;
        transition: 0.5s;
    }

    .middle {

        height: 100%;
        width: 1720px;
        float: left;
    }

    .middle a {
        font: 35px bold black sans-serif;
    }

    .right {
        float: right;
    }

    .footer {
        background-color: #685f5f;
        clear: both;
        height: 50px;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="head">
            <h3>Hello. GuiBao500 (MB Bank)</h3>
            <!-- <img src="top.jpg" alt="IMG, FLASH..." style="height: 100%; width: 100%" > -->
        </div>
        <div class="body">
            <div class="left">
                <ul>
                    <li index="0">Trang chủ</li>
                    <li index="1">TT nhân viên</li>
                    <li index="2">TT phòng ban</li>
                    <li index="3">Tìm kiếm nhân viên</li>
                </ul>
            </div>
            <div class="middle">
                <iframe id="content" style="position:absolute; height: 80%; width:80%; left:15%; top:5%;"></iframe>
            </div>
            <div class="right">

            </div>
        </div>
        <div class="footer">
            <img src="" style="height: 20%; width: 100%">
        </div>
    </div>

    <script>
    let index = document.querySelectorAll('li[index]');
    index.forEach(function(item, i) {
        item.addEventListener("click", function() {
            show(i);
        });
    });

    function show(index) {
        let contentEle = document.getElementById("content");
        if (index === 0) {
            contentEle.src = "index.html";
        } else if (index === 1) {
            contentEle.src = "TTNhanVien.php";
        } else if (index === 2) {
            contentEle.src = "TTPhongBan.php";
        } else if (index === 3) {
            contentEle.src = "timKiem.php";
        }
    }
    </script>
</body>

</html>