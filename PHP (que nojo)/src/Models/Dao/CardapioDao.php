<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Cardapio;

class CardapioDao
{

    public function create(Cardapio $p)
    {

        $sql = 'INSERT INTO Cardapio (idDieta, idPrato, tipoCardapio) VALUES (?,?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getTipoCardapio());
        $cadastrar->bindValue(2, $p->getIdDieta());
        $cadastrar->bindValue(3, $p->getIdPrato());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(Cardapio $p)
    {
    }

    public function delete($id)
    {
    }
}
