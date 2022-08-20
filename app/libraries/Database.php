<?php

/*
create pdo
connect to database
create prepared statement
bind values
run query 
return result
*/
class Database
{
    private $host = HOST;
    private $user = USER;
    private $password = PASSWORD;
    private $dbName = NAME;

    private $pdo;
    private $stmt;
    private $conn;
    public function __construct()
    {
        // $dsn = "mysql:host=$this->host;dbname=$this->dbName";
        // $this->pdo = new PDO($dsn, $this->user, $this->password);
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbName);
?>
        <script>
            //  alert(<?php //echo $_SESSION['user']['id'] 
                        ?>)
        </script>
<?php
    }

    public function query($sql)
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbName);

        //$this->pdo->query($sql);
        // $this->pdo->query("insert into post values(1,'rayamajhi'");
        return $this->conn->query($sql);
    }
}
