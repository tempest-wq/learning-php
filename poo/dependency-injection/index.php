<?php
//Dependo de uma classe concreta
//Injeção de dependência
// constructor property promotion
//Quanto menos objetos instanciados dentro de outro classe, melhor.
//Ai, se uso a injeção de dependência
/*class Database
{
    protected $adapter;

    public function __construct()
    {
        $this->adapter = new MysqlAdapter;
    }
}
class MysqlAdapter {}*/
class MysqlAdapter {}

class Database
{
    //public function __construct(protected MysqlAdapter $adapter)
    //{
    //}
    public function execute(MysqlAdapter $adapter)
    {
        var_dump($adapter);
    }
}
$database = new Database(/*new MysqlAdapter()*/);
$database->execute(new MysqlAdapter());
//A dependência é a instância de uma classe que eu estou injetando
//dentro dos parametros de um metodo normal ou no __construct
//Injetando no construtor, vou ter acesso a todos os metodos dessa classe
//Injetando no metodo só terá acesso dentro do metodo