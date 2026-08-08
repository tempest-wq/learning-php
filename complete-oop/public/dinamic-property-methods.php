<?php
declare(strict_types=1);
require '../vendor/autoload.php';

class ActiveRecord
{
    public array $data = [];
    private $age =  10;

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        }
    }
    public function __call($name, $args)
    {

    }
    public static function __callStatic($name, $args)
    {

    }
}

$activeRecord = new ActiveRecord();
$activeRecord->firstName = 'Qualquer coisa';
echo $activeRecord->firstName;