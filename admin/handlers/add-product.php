<?php
require_once "../../app.php";
// require_once("classes/Validation/Validator.php");
use TechStore\Classes\Validation\Validator;
use TechStore\Classes\Models\Admin;

if ($request->postHas('submit')) {
    $name = $request->post('name');
    $cat_id = $request->post('cat_id');
    $price = $request->post('price');
    $price_no = $request->post("prices_no");
    $desc = $request->post('desc');
    $img = $request->files('img'); 

    echo "<pre>";
    print_r($img);
    echo "</pre>";
    die();

    $validator = new Validator;
    $validator->validate('name', $name, ['Reqired', 'Max']);
    $validator->validate('cat_id', $cat_id, ['Reqired', 'Max']);
    $validator->validate('price', $price, ['Reqired', 'Max']);
    $validator->validate('price_no', $price_no, ['Reqired', 'Max']);
    $validator->validate('desc', $desc, ['Reqired', 'str']);
    $validator->validate('img', $img, []);



    if ($validator->hasError()) {
        $session->set("errors", $validator->getErrors());
        $request->Aredirect("add-product.php");
    } else {

        $ad = new Admin;
        $res = $ad->login($email, $password, $session);
        if ($res) {
            $request->Aredirect("index.php");

            # code...
        } else {
            $session->set('errors', ['Be quite ! and try agin']);
            $request->Aredirect("login.php");
        }
    }
} else {
    $request->Aredirect("login.php");
}
