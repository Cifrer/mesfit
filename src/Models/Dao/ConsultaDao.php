<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Consulta;

class consultaDao
{

    public function create(Consulta $p)
    {
        $sql = 'INSERT INTO Consulta (dataHoraConsulta, codStatusConsulta) VALUES (?,?)';

        $cadastrar = conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getDataHoraConsulta());
        $cadastrar->bindValue(2, $p->getCodStatusConsulta());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(consulta $p)
    {
    }

    public function delete($id)
    {
    }
}
