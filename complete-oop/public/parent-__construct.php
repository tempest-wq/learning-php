<?php
declare(strict_types=1);

require '../vendor/autoload.php';

class ParentUser
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getUserInfo()
    {
        return $this->name . ' ' . $this->age;
    }
}
class ParentUser1 extends ParentUser
{
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
    }
}

$user = new ParentUser1('Rogerio', 34);
echo $user->getUserInfo();