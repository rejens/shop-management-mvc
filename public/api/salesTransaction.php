<?php
include "connection.php";
$to=$_POST['to'];
$from=$_POST['from'];
if(strlen($to)<=1)
    $to=date("Y-m-d");
if(strlen($from)<=1)
    $from="2010-10-10";
$sql = "select * from selling_transaction where user_id='$user_id' and datee between '$from' and '$to' order by datee desc";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
echo (json_encode($rows));
