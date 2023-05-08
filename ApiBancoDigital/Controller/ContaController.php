<?php

namespace ApiBancoDigital\Controller;

use ApiBancoDigital\Model\ContaModel;
use Exception;


class ContaController extends Controller
{
    public static function salvar() : void
    {
        try
        {
            $json_obj = json_decode(file_get_contents('php://input'));

            $model = new ContaModel();
            $model->id = $json_obj->Id;
            $model->tipo = $json_obj->Tipo;
            $model->saldo = $json_obj->Saldo;
            $model->limite = $json_obj->Limite;
            $model->id_correntista = $json_obj->Id_correntista;
           

            $model->save();
              
        } catch (Exception $e) {

            parent::getExceptionAsJSON($e);
        }
    }

    public static function listar() : void
    {
        try
        {
            $model = new ContaModel();
            
            $model->getAllRows();

            parent::getResponseAsJSON($model->rows);
              
        } catch (Exception $e) {

            parent::getExceptionAsJSON($e);
        }
    }

    public static function deletar() : void
    {
        try 
        {
            $model = new ContaModel();
            
            $model->id = parent::getIntFromUrl(isset($_GET['id']) ? $_GET['id'] : null);

            $model->delete();

           
        } catch (Exception $e) {

            parent::getExceptionAsJSON($e);
        }
    }
}