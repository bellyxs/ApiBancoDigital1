<?php

use ApiBancoDigital\Controller;
use ApiBancoDigital\Controller\CorrentistaController;
use ApiBancoDigital\Controller\ContaController;
use ApiBancoDigital\Controller\ChavePixController;
use ApiBancoDigital\Controller\TransacaoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {

    /*CORRENTISTA*/
    case '/correntista/delete':
       CorrentistaController::deletar();
    break;

    case '/correntista/save':
       CorrentistaController::salvar();
    break;

    case 'correntista/entrar':
        /*CorrentistaController::*/
    break;

    /*CONTA*/
    case 'conta/listar':
         ContaController::listar();
    break;

    case 'conta/save':
         ContaController::salvar();
    break;

    case 'conta/delete':
         ContaController::deletar();
    break;

    case 'conta/extrato':
        /*ContaController::*/
    break;
    
    
    /*TRANSACAO*/
    case 'conta/pix/enviar':
        /*TransacaoController::*/
    break;

    case 'conta/pix/receber':
        /*TransacaoController::*/
    break;

   

    default:
            http_response_code(403);
            break;

}