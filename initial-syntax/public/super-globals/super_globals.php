<?php

$_COOKIE; //guardado no navegador pra ser utilizado em qualquer lugar do sistema; tem prazo de validade;

$_SESSION; //não é guardado o valor da sessão, apenas o ID pra ser chamado quando necessário

$_ENV; //

$_FILES; //pegar arquivo enviado de um formulário;

$_GET; // pegar da url as variaveis (ou query strings); siteexemplo.com.br?[id=34&name=zezin]=> query string

$_POST; // pega valores enviados através do header

$_REQUEST; // consegue pegar tanto query string como valores do header (GET e POST)

$_SERVER; //
