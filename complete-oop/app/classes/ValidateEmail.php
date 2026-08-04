<?php

namespace app\classes;

class ValidateEmail
{
    public function execute($field)
    {
        $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);
        if(!$emailIsValid){
//            setFlash($field, "O campo tem que ser um email válido");
            return false;
        }
        return filter_input(INPUT_POST, $field);
    }
}