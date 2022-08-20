<?php require "connection.php";

$today = date('Y-m-d');
$addDays = date('Y-m-d', strtotime($today . '+30 days'));
$sql = "select name from items where expiry_date<='$addDays' and expiry_date>'$today' and expiry_date != '0000-00-00' and user_id='$user_id'";

$result = $conn->query($sql);

$arr = $result->fetch_all(MYSQLI_ASSOC);
echo (json_encode($arr)); 