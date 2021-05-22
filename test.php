<?php

use TechStore\Classes\Models\Admin;

require_once("app.php");
    $ad= new Admin;
    $res=$ad->login("ahmed@gmail.com","123456",$session);
    $ad->logOut($session);
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";