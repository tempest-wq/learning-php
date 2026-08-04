<?php

namespace app\classes;

use Ratchet\Wamp\Exception;

class Validate
{
    private array $validations = [];
    private const string NAMESPACEVALIDATION = "app\\classes\\";
    public function validate():array|bool
    {
        $result = [];
        $param = '';
        foreach ($this->validations as $field => $validate){
            $result[$field] = (!str_contains($validate, '|')) ?
                $this->singleValidation($validate, $field, $param) :
                $this->multipleValidations($validate, $field, $param);
        }
        if (in_array(false, $result)) {
            return false;
        }
        return $result;
    }
    public function setValidations(array $validations): void
    {
        $this->validations = $validations;
    }
    private function singleValidation(string $validate, string $field, string $param): bool|string|int
    {
        if (str_contains($validate, ':')){
            [$validate, $param] =  explode(':', $validate);
        }
        $classValidate = self::NAMESPACEVALIDATION."Validate".ucfirst($validate);
//        return $validate($field, $param);
        if(class_exists($classValidate)){
            return (new $classValidate)->execute($field, $param);
        }
        throw new Exception("Classe {$classValidate} não existe");
    }
    private function multipleValidations(string $validate, string $field, string $param): bool|string|int
    {
        $explodePipeValidate = explode('|', $validate);
        foreach ($explodePipeValidate as $validate){
            if (str_contains($validate, ':')){
                [$validate, $param] = explode(':', $validate);
            }
            $classValidate = self::NAMESPACEVALIDATION."Validate".ucfirst($validate);

            if(class_exists($classValidate)){
                $result = (new $classValidate)->execute($field, $param);
            }
//            $result = $validate($field, $param);
        }
        return $result;
    }
}