<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Dieta;

class DietaDao
{

    public function create(Dieta $p)
    {
        $sql = 'INSERT INTO Dieta (dataFimDieta, dataInicioDieta, observaDieta) VALUES (?,?,?)';

        $cadastrar = conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getDataFimDieta());
        $cadastrar->bindValue(2, $p->getDataInicioDieta());
        $cadastrar->bindValue(3, $p->getObservaDieta());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(Dieta $p)
    {
    }

    public function delete($id)
    {
    }
}
