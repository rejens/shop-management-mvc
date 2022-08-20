<?php

class User extends Database
{
    public $result;
    public $id;
    public $company;
    public $password;

    //gets the login information of the user
    public function getUserInfo()
    {
        $this->id = $_POST['id'];
        $this->company = $_POST['company'];
        $this->password = $_POST['password'];
        $sql = "select * from user WHERE id='$this->id' and company='$this->company'";
        return $this->query($sql);
    }

    //registers the new user
    public function setUserInfo($name, $company, $password, $email)
    {
        $sql = "insert into user (name,company, password, email) values ('$name','$company','$password','$email') ";
        $this->query($sql);
        $result = $this->getUserId($name, $company);
        $result = $result->fetch_assoc();
        return $result;
    }

    //check for existing user
    public function checkUserInfo()
    {
        $this->company = $_POST['company'];
        $sql = "select * from user where company='$this->company'";
        return $this->query($sql);
    }

    //gets the id of the newly signed up user
    public function getUserId($name, $company)
    {
        $sql = "select id from user where name='$name' and company='$company'";
        $result = $this->query($sql);
        return $result;
?>
        <script>
            alert(<?php print_r($result) ?>)
        </script>
<?php
    }

    public function checkPassword()
    {
        $id = $_SESSION['user']['id'];
        $sql = "select password from user where id='$id'";
        return $this->query($sql);
    }

    public function changePassword($password)
    {
        $id = $_SESSION['user']['id'];
        $sql = "update user set password='$password' where id='$id'";
        $this->query($sql);
    }

    public function forgotPassword($id, $email)
    {
        $sql = "select * from user where id='$id' and email='$email'";
        return $this->query($sql);
    }

    public function insertOtp($otp,$email,$id){
        $sql="truncate table otp";
        $this->query($sql);
        $sql="insert into otp (id,email,otp) values('$id','$email','$otp')";
        $this->query($sql);
    }

    public function getOtp(){
        $sql="select otp from otp ";
        $result= $this->query($sql);
        return $result;
    }

    public function changeForgotPassword($password){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql="select * from otp";
        $result=$this->query($sql);
        $result=$result->fetch_assoc();
        $email=$result['email'];
        $id=$result['id'];
        $sql="update user set password='$password' where id='$id' and email='$email'";
        $this->query($sql);
        $sql="truncate table otp";
        $this->query($sql);
    }
}
