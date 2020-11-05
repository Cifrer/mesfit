<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Publicacao;

class PublicacaoDao
{

    public function create(Publicacao $p)
    {

        $sql = 'INSERT INTO Publicacao (tituloPub, rankPub, descPub, dtHrPub, codStatusPub) VALUES (?,?,?,?,?)';

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
    }

    public function update(Publicacao $p)
    {
    }

    public function delete($id)
    {
    }
}
