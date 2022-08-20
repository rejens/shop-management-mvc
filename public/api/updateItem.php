<?php
require "connection.php";
$id = $_POST['id'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];

$sql="select * from items where id='$id'";
$result=$conn->query($sql);
$rows=$result->fetch_assoc();

$unupdated_quantity=$rows['quantity'];
$updated_quantity=$rows['quantity']+$quantity;

$sql = "update items set quantity='$updated_quantity',sp='$price' where id='$id'";
$conn->query($sql);
