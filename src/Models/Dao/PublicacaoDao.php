<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Publicacao;

class PublicacaoDao
{

    public function create(Publicacao $p)
    {

        $sql = 'INSERT INTO publicacao (tituloPub, rankPub, descPub, dtHrPub, codStatusPub) VALUES (?,?,?,?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getTituloPub());
        $cadastrar->bindValue(2, $p->getRankPub());
        $cadastrar->bindValue(3, $p->getDescPub());
        $cadastrar->bindValue(4, $p->getDtHrPub());
        $cadastrar->bindValue(5, $p->getCodStatusPub());

        $cadastrar->execute();
    }

    public function read()
    {
        try{
            $sql = 'SELECT * FROM publicacao';
            $listar = Conexao::getConn()->prepare($sql);
            $listar->execute();

            if ($listar->rowCount() > 0) {
                $result = $listar->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            } else {
                return [];
            }
        } catch (\PDOException $exception) {
            throw $exception;{
        }
    }

    public function update(Publicacao $p)
    {
    }

    public function delete($id)
    {
    }
}
