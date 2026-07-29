<?php

namespace app\models;

class Model
{
    public function listing(): string
    {
        return "Listando todos os dados da tabela {$this->table}";
    }
    public function findBy()
    {

    }
    public function delete(): string
    {
        return "Deletando todos os dados da tabela {$this->table}";
    }
    public function update(): string
    {
        return "Atualizando todos os dados da tabela {$this->table}";
    }
}