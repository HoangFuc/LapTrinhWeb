<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
    <div class="container">
       <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="./model/users/users.php" >List Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./news.php">List News</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./schedules.php">List Schedules</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./fees.php" >List Fees</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./accounts.php" >List Accounts</a>
  </li>
</ul>
    </div>
    <script>
        document.getElementByClassName("container").focus();
    </script>
  </body>
</html>