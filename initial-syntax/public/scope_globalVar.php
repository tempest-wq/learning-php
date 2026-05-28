<?php
// global
$var = "qualquer coisa"; //variaveis são globais

// local
function local()
{
    global $var; //pra ter acesso a uma variavel global

    echo $var;
}
//ou assim:
function local1()
{
    echo $GLOBALS["var"];
}

local();
echo "\n";
local1();
