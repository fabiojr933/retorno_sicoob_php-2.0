<?php

namespace app\controllers;

use app\core\Controller;
use CnabPHP\Retorno;

class LoginController extends Controller
{
    public function index()
    {
        $dados["view"] = "login";
        $this->load("login", $dados);
    }  
    public function logar(){
        $nome  = strtoupper($_POST["username"]);
        $senha = strtoupper($_POST["password"]);  
        
        if($nome == 'DEISE' || $senha == 'DEISE123' OR $nome == 'SUPERVISOR' || $senha == 'SUPERVISOR123'){
            $_SESSION[SESSION_LOGIN] = $nome;
            $this->redirect(URL_BASE."boleto");
        }else{
            $this->redirect(URL_BASE . "login/index");
        }       
    }  
    public function sair(){
        unset($_SESSION[SESSION_LOGIN]);
        $this->redirect(URL_BASE . "login/index");
    }
}
