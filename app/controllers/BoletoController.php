<?php

namespace app\controllers;

use app\core\Controller;
use CnabPHP\Retorno;

class BoletoController extends Controller
{
    public function __construct()
    {       
        if(!$_SESSION[SESSION_LOGIN]){
            $this->redirect(URL_BASE .  "login/index");
            exit;
        }
    }
    public function index()
    {
        $dados["view"]       = "Retorno/novo";
        $this->load("template", $dados);
    }
    public function mensagem01()
    {
        $dados["view"]       = "Retorno/mensagem01";
        $this->load("template", $dados);
    }
    public function mensagem02()
    {
        $dados["view"]       = "Retorno/mensagem02";
        $this->load("template", $dados);
    }
    public function novo()

    {
        $dados["view"]       = "retorno/novo";
        $this->load("template", $dados);
    }
    public function Retorno()
    {
        $_UP['pasta'] = 'retorno/';
        $nome_final = $_FILES['arquivo']['name'];

        $validacao = pathinfo($nome_final);


        if ($validacao['extension'] == "RET" || $validacao['extension'] == "ret") {
            if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
            } else {
                $this->redirect(URL_BASE . "boleto/mensagem02");
            }

            $fileContent = file_get_contents("retorno/" . $nome_final);

            $arquivo = new Retorno($fileContent);

            $registros = $arquivo->getRegistros();
            $dados["boletos"]       = $registros;
            $dados["view"]   =   "Retorno/retorno";
            $this->load("template", $dados);
        } else {
            $this->redirect(URL_BASE . "boleto/mensagem01");
        }
    }   
}
