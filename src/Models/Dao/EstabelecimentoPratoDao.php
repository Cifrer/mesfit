<?php

namespace Src\Models\Dao;

use Src\Models\Domain\EstabelecimentoPrato;

class EstabelecimentoPratoDao
{

    public function create(EstabelecimentoPrato $p)
    {
        $sql = 'INSERT INTO EstabelecimentoPrato (idEstab, idPrato) VALUES (?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getIdEstab());
        $cadastrar->bindValue(2, $p->getIdPrato());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(EstabelecimentoPrato $p)
    {
    }

    public function delete($id)
    {
    }
}
