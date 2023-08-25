<?php
function checkPassword($mssv,$password) {
    require_once "connectdb.php";
    global $conn;
    $sql1 = "SELECT * FROM inforuser WHERE mssv='$mssv'";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();
    $result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
    $kq1 = $stmt1->fetchAll();
    return $kq1[0]['password'];
}


function checkUser($mssv,$password) {
    require_once "connectdb.php";
    global $conn;

    $sql = "SELECT * FROM inforuser WHERE mssv='$mssv'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq[0]['role'];
}
?>