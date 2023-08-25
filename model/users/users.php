<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="table-responsive my-5 container">
    <button class="btn btn-secondary"><a href="./addUsers.php" class="text-light">Add User</a></button>
    <table class="table table-striped list ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">MSSV</th>
      <th scope="col">Class</th>
      <th scope="col">FullName</th>
      <th scope="col">Birthday</th>
      <th scope="col">Major</th>
      <th scope="col">Gender</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../connectdb.php';
    global $i;
    $i = 0;
    $sql = "Select * from `inforuser`";
    // $result=mysqli_query($conn,$sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if ($kq){
      while($i < count($kq)) {
        $id= $kq[$i]['id'];
        $mssv= $kq[$i]['mssv'];
        $class= $kq[$i]['class'];
        $fullName= $kq[$i]['fullName'];
        $birthday= $kq[$i]['birthday'];
        $major= $kq[$i]['major'];
        $gender= $kq[$i]['gender'];
        echo ' <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$mssv.'</td>
          <td>'.$class.'</td>
          <td>'.$fullName.'</td>
          <td>'.$birthday.'</td>
          <td>'.$major.'</td>
          <td>'.$gender.'</td>
          <td>
          <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
          <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
          </td>
          </tr>';
        $i = $i +1;
      }
    }
    ?>

  </tbody>
</table>
</div>
</body>
</html>