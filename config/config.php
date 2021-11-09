<?php
define("SERVIDOR", "localhost");
define("BANCO", "protocolo");
define("USUARIO", "root");
define("SENHA", "");
define("CHARSET", "UTF8");


define('CONTROLLER_PADRAO', 'boleto');
define('METODO_PADRAO', 'novo');
define('NAMESPACE_CONTROLLER', 'app\\controllers\\');
define('TIMEZONE', "America/Cuiaba");
define('CAMINHO', realpath('./'));
define("TITULO_SITE", "Gerenciador de Retorno");

define('URL_BASE', 'http://' . $_SERVER["HTTP_HOST"] . '/app/retorno/');
define('URL_IMAGEM', "http://" . $_SERVER['HTTP_HOST'] . "/app/retorno/UP");

define("SESSION_LOGIN", "usuario_logado");

$config_upload["verifica_extensao"] = true;
$config_upload["extensoes"]         = array(".gif", ".jpeg", ".png", ".bmp", ".jpg", "pdf");
$config_upload["verifica_tamanho"]  = true;
$config_upload["tamanho"]           = 3097152;
$config_upload["caminho_absoluto"]  = realpath('./') . '/';
$config_upload["renomeia"]          = true;
