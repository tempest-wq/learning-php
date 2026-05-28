<?php

//RESGATANDO valor do cookie
$cookie = $_COOKIE["curso"];
echo "\n";

if (isset($cookie)) {
    echo $cookie;
} else {
    echo "Cookie não existe";
}
