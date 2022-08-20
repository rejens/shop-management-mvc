<?php
include "connection.php";
$sql="select * from cart where user_id='$user_id'";
$result=$conn->query($sql);
$result=$result->fetch_all(MYSQLI_ASSOC);
echo json_encode($result);
