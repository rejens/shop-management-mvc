<?php

class Items extends Database
{
    protected $result;
    public $user_id;

    public function __construct()
    {
        // $_SERVER['QUERY_STRING'];
    }

    public function dashboard($func)
    {
        $user_id = $_SESSION['user']['id'];
        return $this->$func($user_id);
    }

    public function sellingTransaction()
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select * from selling_transaction where user_id='$user_id' order by datee";
        $this->result = $this->query($sql);
        return $this->result;
    }

    public function buyingTransaction()
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select * from buying_transaction where user_id='$user_id' order by datee";
        $this->result = $this->query($sql);
        return $this->result;
    }

    public function inventory()
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select * from items where user_id='$user_id'";
        $this->result = $this->query($sql);
        return $this->result;
    }

    public function pieChart($user_id)
    {
        $sql = "select name, quantity, cp from items where user_id='$user_id'";
        return $this->query($sql);
    }

    public function lineChart($user_id)
    {
        $sql = "select datee,sum(salesAmt) as 'group' from selling_transaction where user_id='$user_id' GROUP by datee order by datee ";
        return $this->query($sql);
    }

    //checks whether the item exists in the inventory or not
    public function addModalCheck($name)
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select name from items where user_id='$user_id' and name='$name'";
        return $this->query($sql);
    }

    //adds item to the inventory and updates buying transaction
    // public function addModal($name, $cp, $sp, $quantity, $expiry_date, $vendor)
    // {
    //     //adds item to the inventory
    //     $user_id = $_SESSION['user']['id'];
    //     $sql = "insert into items (name,cp,sp,quantity,user_id,vendor,expiry_date) values ('$name','$cp','$sp','$quantity','$user_id','$vendor','$expiry_date')";
    //     $this->query($sql);

    //     //updates buying transaction
    //     $date = date("y/m/d");
    //     $sql = "insert into buying_transaction (datee,vendor,name,quantity,price) values('$date','$vendor','$name','$quantity','$cp')";
    //     $this->query($sql);
    // }

    //delets item from the inventory
    // public function deleteModal($id)
    // {
    //     $user_id = $_SESSION['user']['id'];
    //     $sql = "delete from items where user_id=$user_id and id=$id";
    //     $this->query($sql);
    // }

    //updates the inventory and sales transaction after sales is done
    //     public function salesModal($item_id, $quantity)
    //     {
    //         $user_id = $_SESSION['user']['id'];
    //         $sql = "select * from items where user_id=$user_id and id=$item_id";
    //         $result = $this->query($sql);
    //         $row = $result->fetch_assoc();
    //         if ($quantity > $row['quantity']) {
    // 
    //             <script>
    //                 alert("not enougn quantity")
    //             </script>
    //         <?php
    //         } else {
    //             $name = $row['name'];
    //             $left_quantity = $row['quantity'] - $quantity;
    //             $sql = "update items set quantity='$left_quantity' where user_id='$user_id' and id=$item_id";
    //             $this->query($sql);

    //             $cost = $row['cp'] * $quantity;
    //             $sales = $row['sp'] * $quantity;
    //             $pl = $sales - $cost;
    //             $date = date("y/m/d");
    //             $sql = "insert into selling_transaction (datee,name,quantity,pl,salesAmt,user_id) values ('$date','$name','$quantity','$pl',$sales,'$user_id')";
    //             $this->query($sql);
    //         
    //             <script>
    //                 location.reload();
    //             </script>
    // 
    //         }
    //     }

    // public function updateModal($id, $quantity, $price)
    // {
    //     $sql = "update items set quantity='$quantity',sp='$price' where id='$id'";
    //     $this->query($sql);
    // }
}
