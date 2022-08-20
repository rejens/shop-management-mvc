<?php
//this is gonna require all the necessary files like libraries, helpers, config etc

include_once "config/config.php";

// include_once "libraries/Core.php";
// include_once "libraries/Controller.php";
// include_once "libraries/Database.php";

spl_autoload_register(function ($class) {
    require_once "libraries/$class.php";
});
