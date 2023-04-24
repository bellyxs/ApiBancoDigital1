<?php

namespace ApiBancoDigital\Model;
use ApiBancoDigital\DAO\TransacaoDAO;
use ApiBancoDigital\DAO\Model\Model;

class TransacaoModel extends Model {
    public $id, $data_trans, $valor, $id_conta_enviou, $id_conta_recebeu;

    public function save()
    {
        include 'DAO/TransacaoDAO.php';
        $dao = new TransacaoDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }

    }

    public function getAllRows()
    {
        include 'DAO/TransacaoDAO.php';
        $dao = new TransacaoDAO();

        $this->rows = $dao->select();
    }

    public function delete(int $id)
    {
        include 'DAO/TransacaoDAO.php';
        $dao = new TransacaoDAO();

        $dao->delete($id);
    }

    public function getById(int $id)
    {
        include 'DAO/TransacaoDAO.php';
        $dao = new TransacaoDAO();
        $obj = $dao->selectById($id);

        return($obj) ? $obj : new TransacaoModel();
    }
}