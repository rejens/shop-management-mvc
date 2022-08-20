<?php
session_start();
//handles the user related things like register login etc.

class Users extends Controller
{
    public $modelObj;
    public  $otpValue;
    public $otp;
    public function __construct()
    {
        $this->modelObj = $this->model("User");
    }

    public function login()
    {
        $this->view("users/login");
        if (isset($_POST['login'])) {
            $result = $this->modelObj->getUserInfo();
            $result = $result->fetch_assoc();
            if ($result) {
                if (password_verify($_POST['password'], $result['password'])) {
                    $_SESSION['user'] = $result;
?>
                    <script>
                        location.replace("<?php echo URLROOT ?>")
                    </script>
                <?php
                } else { ?>
                    <script>
                        Swal.fire({
                            title: "Error!!!",
                            text: "sorry username or password error",
                            icon: "error",
                        });
                    </script>
                <?php
                }
            } else { ?>
                <script>
                    Swal.fire({
                        title: "Error!!!",
                        text: "sorry username or password error",
                        icon: "error",
                    });
                </script>
                <?php
            }
        }
    }

    public function signup()
    {
        $this->view("users/signup");
        if (isset($_POST['signup'])) {
            $name = $_POST['name'];
            $company = $_POST['company'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            if (!empty($name) && !empty($company) && !empty($password)) {
                $result = $this->modelObj->checkUserInfo();
                if ($result->num_rows > 0) {
                ?>
                    <script>
                        Swal.fire({
                            title: "Error!!!",
                            text: "sorry company with that name already registered",
                            icon: "error",
                        });
                    </script>
                <?php
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT); // encrypting password
                    $id = $this->modelObj->setUserInfo($name, $company, $password, $email);
                ?>
                    <script>
                        Swal.fire({
                            title: "success!!!",
                            text: "your user id is <?php echo $id['id'] ?>",
                            icon: "success",
                        }).then((value) => {
                            window.location.replace("<?php echo URLROOT ?>users/login")
                        });
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    Swal.fire({
                        title: "Error!!!",
                        text: "invalid validation",
                        icon: "error",
                    });
                </script>
<?php
            }
        }
    }

    public function forgotPassword()
    {
        $this->view("users/forgotPassword");
        if (isset($_POST['forgotPasswordSubmit'])) {
            $id = $_POST['id'];
            $email = $_POST['email'];
            $result = $this->modelObj->forgotPassword($id, $email);
            if ($result->num_rows >= 1) {

                $otp = substr(uniqid(), 7);
                $this->modelObj->insertOtp($otp,$email,$id);
                $to = $email;
                $subject = "one time password";
                $message = "your otp is $otp, please don't share with anyone ";
                $header = ("From :rejensraya@gmail.com");
                mail($to, $subject, $message, $header);

                echo "<script> otpCountdown()</script>";
                echo "<script> otp()</script>";
            } else {
                echo "sorry no account is created with that email";
            }
        } else if (isset($_POST['submitOtp'])) {
            $mailOtp = $_POST['otp'];

            $otp=$this->modelObj->getOtp();
            $otp=$otp->fetch_assoc();
            
                if ($mailOtp == $otp['otp']) {
                echo "<script> otpCheck()</script>";
            } else {
                echo "sorry otp not found";
            }
        } else if (isset($_POST['changePasswordSubmit'])) {
            $newPassword=$_POST['newPassword'];
            $confirmPassword=$_POST['confirmPassword'];
            if($newPassword==$confirmPassword)
            $this->modelObj->changeForgotPassword($newPassword);
            echo "<script> location.reload(". URLROOT.")</script>";
        }
    }
}
?>