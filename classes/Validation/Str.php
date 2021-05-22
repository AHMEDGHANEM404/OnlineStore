<?php 
// use TechStore\Classes\Models\validorRules;
namespace TechStore\Classes\Validation;


    class Str implements ValidateRules{
        public function check(string $name,$value){
            if(!is_string($value)){
                return "$name must be string";
            }
            return false;
        }
    }