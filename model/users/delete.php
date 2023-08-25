<?php 
include '../connectdb.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql="Delete from `inforuser` where id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($stmt) header('location:users.php');
}

?>