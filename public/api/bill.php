<?php
include "connection.php";

$sql="select * from cart where user_id='$user_id'";
$result=$conn->query($sql);
$rows=$result->fetch_all(MYSQLI_ASSOC);
echo json_encode($rows);


// $sql="delete from cart where user_id='$user_id'";
// $conn->query($sql);
