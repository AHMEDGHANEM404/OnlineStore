<?php
require_once "../../app.php";
// require_once("classes/Validation/Validator.php");

use TechStore\Classes\Models\Order;
use TechStore\Classes\Models\OrderDetalis;
use TechStore\Classes\Validation\Validator;
use TechStore\Classes\Cart;
use TechStore\Classes\Models\Admin;

if ($request->postHas('submit')) {
    $password = $request->post('password');
   
    $email = $request->post('email');

    $validator = new Validator;
    $validator->validate('email', $email, ['Reqired','Max']);
    $validator->validate('password', $password, ['Reqired','Max']);

    if ($validator->hasError()) {
        $session->set("errors",$validator->getErrors());
        $request->Aredirect("login.php");

    }else{
       
        $ad= new Admin;
        $res=$ad->login($email,$password,$session);
        if ($res) {
        $request->Aredirect("index.php");

            # code...
        }else{
            $session->set('errors',['Be quite ! and try agin']);
        $request->Aredirect("login.php");

        }
    }
    
}else{
    $request->Aredirect("login.php");

  
}