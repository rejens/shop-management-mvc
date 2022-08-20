<?php
include "connection.php";
if (isset($_GET['searchItem'])) {
    $param = $_GET['searchItem'];
    $param = "%$param%";
    $sql = "select * from items where user_id='$user_id' and name like '$param'";
} else {
    $sql = "select * from items where user_id='$user_id'";
}
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
echo (json_encode($rows));
