<?php
include "connection.php";

$name=$_POST['name'];

$sql="delete from cart where item_name='$name' and user_id='$user_id'";
$conn->query($sql);