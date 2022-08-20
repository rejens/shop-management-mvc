<?php
session_start();
class Pages extends Controller
{
    protected $chart;
    protected $modalControl;
    public function __construct()
    {
        $this->modelObj = $this->model("Items");
        require APPROOT . "/helpers/Chart.php";

        //redirects to login if not logged in
        if (empty($_SESSION['user'])) {
?>
            <script>
                window.location.replace("<?php echo URLROOT . "users/login" ?>");
            </script>
        <?php
        }
        //logout
        if (isset($_POST['logout'])) {
            session_destroy();
        ?>
            <script>
                location.reload();
            </script>
<?php
        }
        $this->chart = new Chart();
    }


    //dashboard
    public function dashboard()
    {
        $this->view("pages/dashboard");

        $this->result = $this->modelObj->dashboard("pieChart");
        $this->chart->pieChart($this->result);

        $this->result = $this->modelObj->dashboard("lineChart");
        $this->chart->lineChart($this->result);
    }


    //buying transaction
    public function sellingTransaction()
    {
        //$this->result = $this->modelObj->sellingTransaction();
        $this->view("pages/sellingTransaction");
    }


    //selling transaction
    public function buyingTransaction()
    {
        // $this->result = $this->modelObj->buyingTransaction();
        $this->view("pages/buyingTransaction");
    }


    //inventory
    public function inventory($param)
    {
        //$this->result = $this->modelObj->inventory();
        $this->view("pages/inventory");
    }


    //modal control
    //add modal

    public function bill()
    {
        $this->view("pages/bill");
    }
}
?>