<?php

namespace Src\Models\Domain;

class ComentarioEstab
{

    private $idComentaEstab, $idEstab, $idUsu, $descComentaEstab, $dtHrComentaEstab, $codStatusComentaEstab;

    public function getIdComentaEstab()
    {
        return $this->idComentaEstab;
    }

    public function setIdComentaEstab($idComentaEstab)
    {
        $this->idComentaEstab = $idComentaEstab;
    }

    public function getIdEstab()
    {
        return $this->idEstab;
    }

    public function setIdEstab($idEstab)
    {
        $this->idEstab = $idEstab;
    }

    public function getIdUsu()
    {
        return $this->idUsu;
    }

    public function setIdUsu($idUsu)
    {
        $this->idUsu = $idUsu;
    }

    public function getDescComentaEstab()
    {
        return $this->descComentaEstab;
    }

    public function setDescComentaEstab($descComentaEstab)
    {
        $this->descComentaEstab = $descComentaEstab;
    }

    public function getDtHrComentaEstab()
    {
        return $this->dtHrComentaEstab;
    }

    public function setDtHrComentaEstab($dtHrComentaEstab)
    {
        $this->dtHrComentaEstab = $dtHrComentaEstab;
    }

    public function getCodStatusComentaEstab()
    {
        return $this->codStatusComentaEstab;
    }

    public function setCodStatusComentaEstab($codStatusComentaEstab)
    {
        $this->codStatusComentaEstab = $codStatusComentaEstab;
    }
}
