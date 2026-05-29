<?php
//pra excluir uma sessão, você abre e fecha o navegador ou manualmente

// SE VOCÊ QUER EXCLUIR UMA SESSÃO ESPECIFICA E SABE QUAL:
//unset($_SESSION["name"]);

//PRA EXCLUIR TODAS AS SESSÕES:
//session_destroy();


echo isset($_SESSION["name"])
    ? "Sessão existe " . $_SESSION["name"]
    : "Sessão não existe";

isset($_SESSION["person"])
    ? var_dump($_SESSION["person"])
    : "Sessão não existe";
