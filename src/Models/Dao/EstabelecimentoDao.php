<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Estabelecimento;

class EstabelecimentoDao
{

    public function create(Estabelecimento $p)
    {
        $sql = 'INSERT INTO Estabelecimento (cepEstab, nomeEstab, rankEstab, numEndEstab, complEndEstab, codStatusEstab, descEstab) VALUES (?,?,?,?,?,?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getCepEstab());
        $cadastrar->bindValue(2, $p->getNomeEstab());
        $cadastrar->bindValue(3, $p->getRankEstab());
        $cadastrar->bindValue(4, $p->getNumEndEstab());
        $cadastrar->bindValue(5, $p->getComplEndEstab());
        $cadastrar->bindValue(6, $p->getCodStatusEstab());
        $cadastrar->bindValue(7, $p->getDescEstab());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(Estabelecimento $p)
    {
    }

    public function delete($id)
    {
    }
}
