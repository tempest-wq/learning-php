<?php

namespace app\classes;

class ValidateUnique
{
    public function execute($field)
    {
        $data = filter_input(INPUT_POST, $field, htmlspecialchars($field));
//        $user = findBy($param, $field, $data);
        $user = true;
        if($user){
//            setFlash($field, "Esse valor já está cadastrado");
            return false;
        }
        return $data;
    }
}