<?php

use ApiBancoDigital\Controller;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {

    case '/correntista/save':
       /* CorrentistaController::*/
    break;

    case 'conta/extrato':
        /*ContaController::*/
    break;

    case 'conta/pix/enviar':
        /*TransacaoController::*/
    break;

    case 'conta/pix/receber':
        /*TransacaoController::*/
    break;

    case 'correntista/entrar':
        /*CorrentistaController::*/
    break;

    default:
            http_response_code(403);
            break;

}