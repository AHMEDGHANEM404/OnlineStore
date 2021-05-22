<?php
require_once "../../app.php";

use TechStore\Classes\Validation\Validator;
use TechStore\Classes\Models\Admin;

if ($request->postHas('submit')) {
    $name = $request->post('name');
    $email = $request->post('email');
    $password = $request->post('password');
    $confirmPassword = $request->post('confirmPassword');
   

    $validator = new Validator;
    $validator->validate('name', $name, ['Reqired','Max']);
    $validator->validate('email', $email, ['Reqired','Max']);
    // $validator->validate('password', $password, ['Reqired','Max']);
if (! empty($password) and ! $password == $confirmPassword) {
    # code...
    $validator->validate('password', $password, ['Reqired','Max','Str']);

}
    if ($validator->hasError()) {
        $session->set("errors",$validator->getErrors());
        $request->Aredirect("profile.php");

    }else{
       
        $ad= new Admin;
        if (! empty($password)) {
            $haspass= password_hash($password,PASSWORD_DEFAULT);
            $ad->update("name = '$name' , email= '$email' , password = '$haspass'",$session->get('adminId'));

        }else{
          
            $ad->update(" name = '$name' , email= '$email'",$session->get('adminId'));
        }
        $session->set('sucess',"profile edited sucessfully");
        $request->Aredirect("handlers/handle-logout.php");

    }
    
}else{
    $request->Aredirect("login.php");
}