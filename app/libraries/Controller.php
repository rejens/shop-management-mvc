<?php

/*
base controller
this loads the model and views
*/


class Controller
{
    public $modelObj;
    public $result;
    public function __construct()
    {
    }

    //loads view
    public function view($view)
    {
        if (file_exists("../app/views/$view.php")) {
            require_once "../app/views/$view.php";
        } else {
            die("view does not exists");
        }
    }

    //loads model
    public function model($model)
    {
        if (file_exists("../app/models/$model.php")) {
            require_once "../app/models/$model.php";
            return new $model;
        }
    }
}
