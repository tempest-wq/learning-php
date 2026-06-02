//VARIAVEIS DE AMBIENTE (QUANDO TRABALHAR COM .ENV SEMPRE UTILIZAR O $_ENV)
require "../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();

var_dump($_ENV["ROOT"]);
