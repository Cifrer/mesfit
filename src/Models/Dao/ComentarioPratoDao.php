<?php

namespace Src\Models\Dao;

use Src\Models\Domain\ComentarioPrato;

class ComentarioPratoDao
{

    public function create(ComentarioPrato $p)
    {
        $sql = 'INSERT INTO ComentarioPrato (dtHrComenta, descComenta, codStatusComenta) VALUES (?,?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getDtHrComenta());
        $cadastrar->bindValue(2, $p->getDescComenta());
        $cadastrar->bindValue(3, $p->getCodStatusComenta());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(ComentarioPrato $p)
    {
    }

    public function delete($id)
    {
    }
}
