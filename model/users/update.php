<?php
include "../connectdb.php";
global $hash;
$id = $_GET['updateid'];
if(isset($_POST['submit'])){
    $mssv = $_POST['mssv'];
    $class = $_POST['class'];
    $fullName = $_POST['fullName'];
    $birthday = $_POST['birthday'];
    $major = $_POST['major'];
    $gender= $_POST['gender'];
    $password = $_POST['password'];
    $sql = "Update `inforuser` set mssv='$mssv', class='$class', fullName='$fullName', birthday='$birthday',major='$major',gender='$gender', password='$password' where id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($stmt) {
        header("location: users.php");
    }else {
        echo "<script type='text/javascript'>alert('Error');</script>";
    }

}
?>  


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Mssv</label>
                <input type="text" class="form-control" name="mssv">
            </div>
            <div class="mb-3">
                <label class="form-label">Class</label>
                <input type="text" class="form-control" name="class">
            </div>
            <div class="mb-3">
                <label class="form-label">FullName</label>
                <input type="text" class="form-control" name="fullName">
            </div>
            <div class="mb-3">
                <label class="form-label">Birthday</label>
                <input type="text" class="form-control" name="birthday"  placeholder="yyyy-mm-dd">
            </div>
            <div class="mb-3">
                <label class="form-label">Major</label>
                <input type="text" class="form-control" name="major">
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender">
            </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
             <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>