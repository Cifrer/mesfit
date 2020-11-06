<?php

namespace Src\Models\Domain;

class Publicacao
{
    private $idPub, $idUsu, $tituloPub, $rankPub, $descPub, $dtHrPub, $ImgPub, $LinkPub, $codStatusPub;

    public function getPub()
    {
        return PublicacaoDao::read();
    }

    public function setIdPub($idPub)
    {
        $this->idPub = $idPub;
    }

    public function getUsuid()
    {
        return $this->idUsu;
    }

    public function setIdUsu($idUsu)
    {
        $this->idUsu = $idUsu;
    }

    public function getTituloPub()
    {
        return $this->tituloPub;
    }

    public function setTituloPub($tituloPub)
    {
        $this->tituloPub = $tituloPub;
    }

    public function getRankPub()
    {
        return $this->rankPub;
    }

    public function setRankPub($rankPub)
    {
        $this->rankPub = $rankPub;
    }

    public function getDescPub()
    {
        return $this->descPub;
    }

    public function setDescPub($descPub)
    {
        $this->descPub = $descPub;
    }

    public function getDtHrPub()
    {
        return $this->dtHrPub;
    }

    public function setDtHrPub($dtHrPub)
    {
        $this->dtHrPub = $dtHrPub;
    }

    public function getImgPub()
    {
        return $this->ImgPub;
    }

    public function setImgPub($ImgPub)
    {
        $this->ImgPub = $ImgPub;
    }

    public function getLinkPub()
    {
        return $this->LinkPub;
    }

    public function setLinkPub($LinkPub)
    {
        $this->LinkPub = $LinkPub;
    }

    public function getCodStatusPub()
    {
        return $this->codStatusPub;
    }

    public function setcodStatusPub($codStatusPub)
    {
        $this->codStatusPub = $codStatusPub;
    }
}
