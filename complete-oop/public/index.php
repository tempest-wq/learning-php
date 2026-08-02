<?php
declare(strict_types=1);
require '../vendor/autoload.php';

//Public - são visiveis dentro da propria classe, nas classes filhas e nas instancias da classe
//Protected - são visiveis dentro da propria classe e nas classes filhas
//Private - é visivel somente dentro da propria classe

/**
 *
 */
class Connection
{
    public static function connect()
    {
        return 'Conectando';
    }
}
class Model
{
    protected $connection;
    public function __construct()
    {
        $this->connection = Connection::connect();
    }
}

class User extends Model
{

}