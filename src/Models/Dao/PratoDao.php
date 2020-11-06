<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Prato;

class PratoDao
{

    public function create(Prato $p)
    {
        $sql = 'INSERT INTO Prato (idPrato, nomePrato, rankPrato, descPrato, horario, ImgPrato, LinkPrato) VALUES (?,?,?,?,?,?,?,?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getIdPrato());
        $cadastrar->bindValue(2, $p->getNomePrato());
        $cadastrar->bindValue(3, $p->getRankPrato());
        $cadastrar->bindValue(4, $p->getDescPrato());
        $cadastrar->bindValue(5, $p->getHorario());
        $cadastrar->bindValue(6, $p->getImgPrato());
        $cadastrar->bindValue(7, $p->getLinkPrato());

        $cadastrar->execute();
    }

    public function read()
    {
        try{
            $sql = 'SELECT * FROM prato';
            $listar = Conexao::getConn()->prepare($sql);
            $listar->execute();
        
            if ($listar->rowCount() > 0) {
                $result = $listar->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            } else {
                return [];
            }
        } catch (\PDOException $exception) {
            throw $exception;{
            }
        }
    }

    public function update(Prato $p)
    {
    }

    public function delete($id)
    {
    }
}
