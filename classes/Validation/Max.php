<?php 
namespace TechStore\Classes\Validation;



    class Max implements ValidateRules{
        public function check(string $name,$value){
            if( strlen($name)>255){
                return "$name lenght must be less than 255";
            }
            return false;
        }
    }