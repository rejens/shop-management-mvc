<?php
require "connection.php";
$name = $_POST['inputName'];
$cp = $_POST['inputCp'];
$sp = $_POST['inputSp'];
$quantity = $_POST['inputQuantity'];
$expiry = $_POST['inputExpiry'];
$vendor = $_POST['inputVendor'];



$today=date("Y-m-d");
if($expiry<=$today && strlen($expiry)<0){
    echo 1;
}
else{
$sql = "insert into items (name,cp,sp,quantity,user_id,expiry_date,vendor) values('$name','$cp','$sp','$quantity','$user_id','$expiry','$vendor')";
$conn->query($sql);
}