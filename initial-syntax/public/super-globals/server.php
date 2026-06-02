
//VARIAVEIS DO SERVIDOR SEMPRE UTILIZAR O $_SERVER
require "../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER["DOCUMENT_ROOT"]);
$dotenv->load();

var_dump($_SERVER['DATABASE']);
