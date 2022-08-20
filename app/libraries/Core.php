<?php

/*
app core class
creates url and loads core controller
*/

class Core
{

    protected $currentController = "Pages";
    protected $currentMethod = "dashboard";
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();


        //look in controllers for first index

        if (isset($url)) {
            if (file_exists("../app/controllers/$url[0].php")) {
                $this->currentController = $url[0];
            }
        }
        unset($url[0]);
        require_once("../app/controllers/$this->currentController.php");
        $this->currentController = new $this->currentController;

        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
            }
            unset($url[1]);

            if (isset($url)) {
                $this->params = array_values($url);
            }
        }
        $controller = $this->currentController;
        $method = $this->currentMethod;
        $params = $this->params;

        $controller->$method($params);
        //$this->currentController->$this->currentMethod($this->params);
    }


    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}
