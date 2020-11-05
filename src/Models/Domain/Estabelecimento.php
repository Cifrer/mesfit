<?php

namespace Src\Models\Domain;

class Estabelecimento {

    private $idEstab, $cepEstab, $nomeEstab, $rankEstab, $numEndEstab, $complEndEstab, $codStatusEstab, $descEstab;

    public function getIdEstab(){
        return $this->idEstab;
    }

    public function setIdEstab($idEstab){
        $this->idEstab = $idEstab;
    }

    public function getCepEstab(){
        return $this->cepEstab;
    }

    public function setCepEstab($cepEstab){
        $this->cepEstab = $cepEstab;
    }

    public function getNomeEstab(){
        return $this->nomeEstab;
    }

    public function setNomeEstab($nomeEstab){
        $this->nomeEstab = $nomeEstab;
    }

    public function getRankEstab(){
        return $this->rankEstab;
    }

    public function setRankEstab($rankEstab){
        $this->rankEstab = $rankEstab;
    }

    public function getNumEndEstab(){
        return $this->numEndEstab;
    }

    public function setNumEndEstab($numEndEstab){
        $this->numEndEstab = $numEndEstab;
    }

    public function getComplEndEstab(){
        return $this->complEndEstab;
    }

    public function setComplEndEstab($complEndEstab){
        $this->complEndEstab = $complEndEstab;
    }

    public function getCodStatusEstab(){
        return $this->codStatusEstab;
    }

    public function setCodStatusEstab($codStatusEstab){
        $this->codStatusEstab = $codStatusEstab;
    }

    public function getDescEstab(){
        return $this->descEstab;
    }

    public function setDescEstab($descEstab){
        $this->descEstab = $descEstab;
    }
}
