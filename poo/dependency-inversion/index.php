<?php
//Inversão de dependência
//Dependo de uma interface ou classe abstrata
require '../vendor/autoload.php';

abstract class DatabaseAbstract
{
    abstract public function connect();
}
interface DataBaseInterface
{
    public function connect();
}

class MysqlDatabase extends DatabaseAbstract implements DataBaseInterface
{
    public function connect()
    {
        return 'Connected to MySQL';
    }
}

class SQLiteDatabase extends DatabaseAbstract implements DataBaseInterface
{
    public function connect()
    {
        return 'Connected to SQLite';
    }
}

class PsgDatabase extends DatabaseAbstract implements DataBaseInterface
{
    public function connect()
    {
        return 'Connected to Psg';
    }
}

class Database //Base da familia de banco de dados
{
    public function connect(DatabaseAbstract $database)
    {
        return $database->connect();
    }
}

$database = new Database();
$connect = $database->connect(new PsgDatabase());
echo $connect;