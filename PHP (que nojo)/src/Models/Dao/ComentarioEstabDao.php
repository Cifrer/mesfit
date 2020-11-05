<?php

namespace Src\Models\Dao;

use Src\Models\Domain\ComentarioEstab;

class ComentarioEstabDao
{

    public function create(ComentarioEstab $p)
    {
        $sql = 'INSERT INTO ComentarioEstab (descComentaEstab, dtHrComentaEstab, codStatusComentaEstab) VALUES (?,?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getDescComentaEstab());
        $cadastrar->bindValue(2, $p->getDtHrComentaEstab());
        $cadastrar->bindValue(2, $p->getCodStatusComentaEstab());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(ComentarioEstab $p)
    {
    }

    public function delete($id)
    {
    }
}
