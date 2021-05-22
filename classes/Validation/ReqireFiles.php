<?php

    namespace TechStore\Classes\Validation;


    class ReqireFiles implements ValidateRules
    {
        public function check(string $name, $value)
        {
            if ($value['error'] !==0) {
                return "$name is reqired";
            }
            return false;
        }
    }
