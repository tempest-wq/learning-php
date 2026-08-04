<?php

namespace app\classes;

class ValidateRequired
{
    public function execute($field)
    {
        if($_POST[$field] === ''){
//            setFlash($field, "O campo é obrigatório");
            return false;
        }
        return filter_input(INPUT_POST, $field);
    }
}