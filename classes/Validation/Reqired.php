<?php 
// use TechStore\Classes\Models\validorRules;
namespace TechStore\Classes\Validation;


    class Reqired implements ValidateRules{
        public function check(string $name,$value){
            if(empty($value)){
                return "$name is reqired";
            }
            return false;
        }
    }