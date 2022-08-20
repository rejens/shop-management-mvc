<?php require "connection.php";

$today = date('Y-m-d');
$sql = "select name from items where expiry_date<='$today' and user_id='$user_id' and expiry_date!='0000-00-00'";
$result = $conn->query($sql);

$arr = $result->fetch_all(MYSQLI_ASSOC);
echo (json_encode($arr)); 