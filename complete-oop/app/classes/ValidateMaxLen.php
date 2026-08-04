<?php

namespace app\classes;

class ValidateMaxLen
{
    public function execute($field, $param)
    {
        $data = filter_input(INPUT_POST, $field, htmlspecialchars($field));
        if(strlen($data)>$param){
//            setFlash($field, "Esse campo não passar de {$param} caracteres");
            return false;
        }
        return $data;
    }
}