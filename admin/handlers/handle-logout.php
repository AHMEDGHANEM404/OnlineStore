<?php

require("../../app.php");
use TechStore\Classes\Models\Admin;

    $ad=new Admin;
    $ad->logOut($session);
    $request->Aredirect("login.php");
