<?php

namespace Src\Models\Domain;

class Prato {

    private $idPrato, $nomePrato, $rankPrato, $descPrato, $horario, $ImgPrato, $LinkPrato ;

    public function getIdPrato(){
        return $this->idPrato;
    }

    public function setIdPrato($idPrato){
        $this->idPrato = $idPrato;
    }

    public function getNomePrato(){
        return $this->nomePrato;
    }

    public function setNomePrato($nomePrato){
        $this->nomePrato = $nomePrato;
    }

    public function getRankPrato(){
        return $this->rankPrato;
    }

    public function setRankPrato($rankPrato){
        $this->rankPrato = $rankPrato;
    }

    public function getDescPrato(){
        return $this->descPrato;
    }

    public function setDescPrato($descPrato){
        $this->descPrato = $descPrato;
    }

    public function getHorario(){
        return $this->horario;
    }

    public function setHorario($horario){
        $this->horario = $horario;
    }

    public function getImgPrato(){
        return $this->ImgPrato;
    }

    public function setImgPrato($ImgPrato){
        $this->ImgPrato = $ImgPrato;
    }

    public function getLinkPrato(){
        return $this->LinkPrato;
    }

    public function setLinkPrato($LinkPrato){
        $this->LinkPrato = $LinkPrato;
    }
}