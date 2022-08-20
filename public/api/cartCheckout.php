<?php

include "connection.php";

$sql = "select * from cart where user_id='$user_id'";
$result=$conn->query($sql);
$rows=$result->fetch_all(MYSQLI_ASSOC);

foreach($rows as $row){
    $name=$row['item_name'];
    $sql="select quantity from items where name='$name' and user_id='$user_id'";
    $result=$conn->query($sql);
    $quantity=$result->fetch_assoc();
    $quantity=$quantity['quantity'];

    $cart_quantity=$row['quantity'];
    $left_quantity=$quantity-$cart_quantity;

    $sql = "update items set quantity='$left_quantity' where name='$name' and user_id='$user_id';";
    $conn->query($sql);
}
$sql="insert into selling_transaction select * from cart";
$conn->query($sql);

$sql="delete from cart where user_id='$user_id'";
$conn->query($sql);


