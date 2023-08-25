<?php
    session_start();
    ob_start();
    include "./model/connectdb.php";
    include "./model/user.php";
    if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
        $mssv = $_POST['mssv']; 
        $password = $_POST['password'];       
        $role = checkUser($mssv,$password);
        $hash = checkPassword($mssv,$password);
        // $result = password_verify($password,$hash);
        // var_dump($password);
        // var_dump($hash);
        // var_dump($result);
        $_SESSION['role'] = $role; //check lại session khi vào trang admin
        // if($result == 'true') {
            if($role == 1) {
                header('location: admin.php');
            }
            else {
                header('location: sinhvien.php');
            }
        // }
    }
    

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            background-size: cover;
            background-color: #8FBC8F
        }

        #wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #form-login {
            max-width: 400px;
            background: hsl(30, 13%, 94%);

            flex-grow: 1;
            padding-top: 40px;
            padding-right: 30px;
            padding-bottom: 49px;

            text-align: center;
            padding-top: 40px;

        }

        .form-group {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .form-input {
            background: transparent;
            padding: 8px 8px;
            font-size: 18px;

        }

        .form-submit {
            width: 12rem;
            text-transform: uppercase;
        }

        .logodangnhap img {
            width: 100%;
            height: 315px;

        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="logodangnhap">
            <img src="./images/abc_school.png" alt="logo">
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" id="form-login" method="POST">
            <h1>Đăng nhập</h1>
            <div class="form-group">
                <input type="text" name="mssv" class="form-input" placeholder="Nhập mã số sinh viên">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="Nhập mật khẩu">
            </div>
            <input type="submit" value="Đăng nhập" class="form-submit" name="dangnhap">
        </form>
    </div>
     <?php
            if(isset($txt_err)&&($txt_err!="")){
                echo "<font color = 'red'>".$txt_err."</font>";
            }
            ?>
</body>
</html>