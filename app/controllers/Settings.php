<?php require_once APPROOT . "/views/includes/header.php" ?>

<?php
session_start();

class Settings extends Controller
{
    public $modelObj;
    public function __construct()
    {
        //redirects to login if not logged in
        if (empty($_SESSION)) {
?>
            <script>
                window.location.replace("<?php echo URLROOT . "users/login" ?>");
            </script>
            <?php
        }
        $this->modelObj = $this->model("User");
    }


    public function changePassword()
    {

        $this->view("settings/changePassword");
        if (isset($_POST['changePasswordSubmit'])) {
            $oldPassword = $_POST['oldPassword'];
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];

            $result = $this->modelObj->checkPassword();
            $result = $result->fetch_assoc()['password'];
            if (password_verify($oldPassword, $result)) {
                if ($newPassword == $confirmPassword) {
                    $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $this->modelObj->changePassword($newPassword);
                    session_destroy();
            ?>
                    <script>
                        location.reload();
                    </script>
<?php
                }
            }
        }
    }

    public function updateProfile()
    {
        $this->view("settings/updateProfile");
    }
}
