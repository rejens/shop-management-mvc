<?php
include "connection.php";
$date=date("Y-m-d");
$name=$_POST['name'];
$quantity=$_POST['quantity'];

$sql="select * from cart where item_name='$name' and user_id='$user_id'";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo 2;
}else{

$sql="select * from items where user_id='$user_id' and name='$name'";
$result=$conn->query($sql);
$rows=$result->fetch_assoc();
if($quantity>$rows['quantity']){
    echo 1;
}
else if($rows['expiry_date']<=$date &&  $rows['expiry_date']!="0000-00-00" ){
    echo 3;
}

else{
    $cp=$rows['cp']*$quantity;
    $sp=$rows['sp']*$quantity;
    $pl=$sp-$cp;
    $salesAmt=$quantity;

    $sql = "insert into cart (datee,item_name,quantity,user_id,cp,sp,pl) values('$date','$name','$quantity','$user_id','$cp','$sp','$pl') ";
    $conn->query($sql);
}
}