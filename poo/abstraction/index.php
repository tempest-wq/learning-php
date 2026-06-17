<?php

//Classes abstratas não podem ser instanciadas, e qlqr classe que tenha metodo abstrato também deve ser abstrata

abstract class Logger
{
//Metodo abstrato dentro de classe abstrata obriga a todos as classes filhas utilizem o metodo
    abstract public function log($message):string; //Apenas a assinatura em metodos abs
}
class FileLog extends Logger
{
    public function log($message):string{
        return 'FileLog: '. $message;
    }
}

class DatabaseLog extends Logger
{
    public function log($message):string{
        return 'DatabaseLog: '.$message;
    }
}

$loggerFile = new FileLog();
$loggerFile->log("Qualquer coisa");

$loggerDb = new DatabaseLog();
$loggerDb->log('Qualquer coisa db');

