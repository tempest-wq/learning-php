<?php

require '../vendor/autoload.php';

interface DataBaseInterface
{
    public function connect();
}

class MysqlDatabase implements DataBaseInterface
{
    public function connect()
    {
        return 'Connected to MySQL';
    }
}
class SQLiteDatabase implements DataBaseInterface
{
    public function connect()
    {
        return 'Connected to SQLite';
    }
}
class PsgDatabase implements DataBaseInterface
{
    public function connect()
    {
        return 'Connected to Psg';
    }
}

class Database //Base da familia de banco de dados
{
    public function connect(DataBaseInterface $database)
    {

    }
}





