<?php
require "connection.php";
$id = $_POST['id'];
$sql = "delete from items where user_id='$user_id' and id='$id'";
$conn->query($sql);
