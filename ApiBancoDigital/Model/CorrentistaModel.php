<?php

namespace ApiBancoDigital\Model;
use ApiBancoDigital\DAO\CorrentistaDAO;
use ApiBancoDigital\DAO\Model\Model;

class CorrentistaModel extends Model {
    public $id, $nome, $cpf, $senha, $data_nasc;

    public function save()
    {
        include 'DAO/CorrentistaDAO.php';
        $dao = new CorrentistaDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }

    }

    public function getAllRows()
    {
        include 'DAO/CorrentistaDAO.php';
        $dao = new CorrentistaDAO();

        $this->rows = $dao->select();
    }

    public function delete(int $id)
    {
        include 'DAO/CorrentistaDAO.php';
        $dao = new CorrentistaDAO();

        $dao->delete($id);

    }

    public function getById(int $id)
    {
        include 'DAO/CorrentistaDAO.php';
        $dao = new CorrentistaDAO();
        $obj = $dao->selectById($id);

        return($obj) ? $obj : new CorrentistaModel();
    }
}