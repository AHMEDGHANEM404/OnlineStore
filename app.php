<?php
// paths
define("PATH", __DIR__ . "/");
define("URL", "http://localhost/project/");
//admin
define("APATH", __DIR__ ."/admin/");
define("AURL", "http://localhost/project/admin/");

// DB
define("SERVER_NAME", "localhost");
define("DB_USER_NEME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "workshop2");
require_once(PATH ."vendor/autoload.php");
use TechStore\Classes\Request;
use TechStore\Classes\Session;
$request = new Request;
$session = new Session;




