<?php

namespace Src\Models\Dao;

use Src\Models\Domain\PratoIngrediente;

class PratoIngredienteDao
{

    public function create(PratoIngrediente $p)
    {
        $sql = 'INSERT INTO PratoIngrediente (idPrato, idIngred) VALUES (?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getIdPrato());
        $cadastrar->bindValue(2, $p->getIdIngred());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(PratoIngrediente $p)
    {
    }

    public function delete($id)
    {
    }
}
