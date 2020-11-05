<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Prato;

class PratoDao
{

    public function create(Prato $p)
    {
        $sql = 'INSERT INTO Prato (idPrato, nomePrato, precoPrato, rankPrato, descPrato, horario) VALUES (?,?,?,?,?,?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getIdPrato());
        $cadastrar->bindValue(2, $p->getNomePrato());
        $cadastrar->bindValue(3, $p->getPrecoPrato());
        $cadastrar->bindValue(4, $p->getRankPrato());
        $cadastrar->bindValue(5, $p->getDescPrato());
        $cadastrar->bindValue(7, $p->getHorario());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(Prato $p)
    {
    }

    public function delete($id)
    {
    }
}
