<?php

namespace Src\Models\Domain;

class Usuario
{
    private $celUsu;
    private $codStatusUsu;
    private $cpfUsu;
    private $emailUsu;
    private $idTipo;
    private $idUsu;
    private $nomeUsu;
    private $senhaUsu;

    public function getCelUsu()
    {
        return $this->celUsu;
    }

    public function setCelUsu($celUsu)
    {
        $this->celUsu = $celUsu;
    }

    public function getCodStatusUsu()
    {
        return $this->codStatusUsu;
    }

    public function setCodStatusUsu($codStatusUsu)
    {
        $this->codStatusUsu = $codStatusUsu;
    }

    public function getCpfUsu()
    {
        return $this->cpfUsu;
    }

    public function setCpfUsu($cpfUsu)
    {
        $this->cpfUsu = $cpfUsu;
    }

    public function getEmailUsu()
    {
        return $this->emailUsu;
    }

    public function setEmailUsu($emailUsu)
    {
        $this->emailUsu = $emailUsu;
    }

    public function getIdTipo()
    {
        return $this->idTipo;
    }

    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;
    }

    public function getIdUsu()
    {
        return $this->idUsu;
    }

    public function setIdUsu($idUsu)
    {
        $this->idUsu = $idUsu;
    }

    public function getNomeUsu()
    {
        return $this->nomeUsu;
    }

    public function setNomeUsu($nomeUsu)
    {
        $this->nomeUsu = $nomeUsu;
    }

    public function getSenhaUsu()
    {
        return $this->senhaUsu;
    }

    public function setSenhaUsu($senhaUsu)
    {
        $this->senhaUsu = $senhaUsu;
    }
}
