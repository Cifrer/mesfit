<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Ingrediente;

class IngredienteDao
{

    public function create(Ingrediente $p)
    {
        $sql = 'INSERT INTO Ingrediente (nomeIngred, numCaloriasIngred, codStatusIngred) VALUES (?,?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getNomeIngred());
        $cadastrar->bindValue(2, $p->getNumCaloriasIngred());
        $cadastrar->bindValue(2, $p->getCodStatusIngred());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(Ingrediente $p)
    {
    }

    public function delete($id)
    {
    }
}
