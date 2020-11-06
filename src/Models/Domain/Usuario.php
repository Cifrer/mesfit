<?php

namespace Src\Models\Domain;

class Usuario
{
    private $celUsu;
    private $codStatusUsu;
    private $cpfUsu;
    private $PesoUsu;
    private $IdadeUsu;
    private $IMCUsu;
    private $AlturaUsu;
    private $ObsUsu;
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

    public function getPesoUsu()
    {
        return $this->PesoUsu;
    }

    public function setPesoUsu($PesoUsu)
    {
        $this->PesoUsu = $PesoUsu;
    }

    public function getIdadeUsu()
    {
        return $this->IdadeUsu;
    }

    public function setIdadeUsu($IdadeUsu)
    {
        $this->IdadeUsu = $IdadeUsu;
    }

    public function getIMCUsu()
    {
        return $this->IMCUsu;
    }

    public function setIMCUsu($IMCUsu)
    {
        $this->IMCUsu = $IMCUsu;
    }

    public function getAlturaUsu()
    {
        return $this->AlturaUsu;
    }

    public function setAlturaUsu($AlturaUsu)
    {
        $this->AlturaUsu = $AlturaUsu;
    }

    public function getObsUsu()
    {
        return $this->ObsUsu;
    }

    public function setObsUsu($ObsUsu)
    {
        $this->ObsUsu = $ObsUsu;
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
