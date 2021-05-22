<?php

namespace TechStore\Classes;

class Cart
{
    public function add(string $id, array $prodDate)
    {
        $_SESSION['cart'][$id] = $prodDate;

    }
    public function Count()
    {
        if(isset($_SESSION['cart']))
        return count($_SESSION['cart']);
        
        
    }
    public function  total()
    {
        $total=0;
        if(isset($_SESSION['cart']))
        {
            foreach ($_SESSION['cart'] as $id => $prodDate) {
                # code...
                $total+=$prodDate['qty'] * $prodDate['price'];
            }
            return $total;
        }
        
        
    }
    public function has(string $id)
    {
        if(isset($_SESSION['cart'])){

            array_key_exists($id,$_SESSION['cart']);        
        }else{
            return false;
        }
    }
    public function All(){
        if(isset($_SESSION['cart']))
        return $_SESSION['cart'];
    }
    public function Remove(string $id){
        unset($_SESSION['cart'][$id]);

    }
    public function Empty(){
        $_SESSION['cart']=[];

    }

}
