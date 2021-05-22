<?php
// use TechStore\Classes\Models\validorRules;
namespace TechStore\Classes\Validation;

    interface ValidateRules{
        public function check(string $name ,$value);
    }