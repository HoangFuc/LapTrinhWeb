<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            * {
        padding: 0;
        margin: 0;

    }

    body {
        background-color: lightgrey;
    }

    nav {
        position: fixed;
        background-color: #8FBC8F;
        height: 70px;
        width: 100%;
        z-index: 1;
    }


    .logo {
        font-size: 25px;
        position: relative;
        margin-left: 25%;
        color: white;
        font-weight: bold;
        line-height: 70px;
    }

    .dropdown-sv {

        position: relative;
        margin-right: 25%;
        font-size: 25px;
        color: white;
        float: right;
        line-height: 70px;


    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;

    }

    .dropdown-sv:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        text-decoration: none;
        color: black;
        font-size: 20px;
        line-height: 30px;

    }

    .general {

        width: 1400px;
        height: 800px;
        background-color: paleturquoise;
        margin-left: 250px;
        margin-right: 250px;
        position: absolute;
        top: 150px;

    }

    .thongtin {
        display: block;
        background-color: #8FBC8F;
        width: 500px;
        height: 620px;
        margin-top: 40px;
        margin-left: 40px;
        padding: 50px;

    }

    .thongtin p {
        font-size: 22px;
        padding: 5px;

    }

    .thong-tin-ca-nhan {
        background-color: #8FBC8F;
        width: 200px;
        height: 200px;
        margin-left: 650px;
        margin-top: -610px;
        text-align: center;
        line-height: 200px;
    }

    .schedule {
        background-color: #8FBC8F;
        width: 200px;
        height: 200px;
        margin-top: -200px;
        margin-left: 300px;
        text-align: center;
        line-height: 200px;
    }

    .result {

        background-color: #8FBC8F;
        width: 200px;
        height: 200px;
        margin-left: 300px;
        margin-top: -200px;
        text-align: center;
        line-height: 200px;

    }

    .cong-no {

        background-color: #8FBC8F;
        width: 200px;
        height: 200px;
        margin-top: 60px;
        text-align: center;
        line-height: 200px;
    }

    .avatar img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 200px;
        height: 300px;
        padding-bottom: 20px;
    }

    .thong-tin-ca-nhan a {
        font-size: 22px;
    }

    .thong-tin-ca-nhan a:link {
        text-decoration: none;
    }

    .thong-tin-ca-nhan a:visited {
        text-decoration: none;
    }

    .thong-tin-ca-nhan a:hover {
        text-decoration: underline;
    }

    .thong-tin-ca-nhan a:active {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="contaiter">
        <nav>
            <label class="logo">ABC-School</label>
            <div class="dropdown-sv">
                <span>Họ và Tên</span>
                <div class="dropdown-content">
                    <a href="../form-thongtincanhan-page/thongtincanhan.html">Thông tin cá nhân</a><br>
                    <a href="">Lịch học</a><br>
                    <a href="">Kết quả học tập</a><br>
                    <a href="">Công nợ</a><br>
                    <a href="">Đăng xuất</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="general">
        <div class="thongtin">
            <div class="avatar">
                <img src="./images/abc_school.png" alt="">
            </div>
            <p>Họ và tên: Trà Thanh Tú</p>
            <p>Mã số sinh viên: 2051150193 </p>
            <p>Giới tính: Nam</p>
            <p>Ngày sinh: 08/12/2002</p>
            <p>Nơi sinh: Tp.Hồ Chí Minh</p>
            <p>Lớp học: KM20B</p>
            <p>Ngành: Mạng máy tính và truyền thông dữ liệu </p>
            <div class="thong-tin-ca-nhan">
                <a  >Thông tin cá nhân</a>
                <div class="schedule">
                    <a href="">Lịch học</a>
                </div>
                <div class="cong-no">
                    <a href="">Công nợ</a>
                </div>
                <div class="result">
                    <a href="">Kết quả học tập</a>
                </div>
            </div>
        </div>
    </div>








</body>


</html>