<?php

namespace Src\Models\Dao;

use Src\Models\Domain\PerfilProfissional;

class PerfilProfissionalDao
{

    public function create(PerfilProfissional $p)
    {
        $sql = 'INSERT INTO PerfilProfissional (avaliacaoPerfil, tempoAtuacaoPerfil, descTitulacaoPerfil, resumoExperienciaPerfil, codStatusPerfil) VALUES (?,?,?,?,?)';

        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1, $p->getAvaliacaoPerfil());
        $cadastrar->bindValue(2, $p->getTempoAtuacaoPerfil());
        $cadastrar->bindValue(3, $p->getDescTitulacaoPerfil());
        $cadastrar->bindValue(4, $p->getResumoExperienciaPerfil());
        $cadastrar->bindValue(5, $p->getCodStatusPerfil());

        $cadastrar->execute();
    }

    public function read()
    {
    }

    public function update(PerfilProfissional $p)
    {
    }

    public function delete($id)
    {
    }
}
