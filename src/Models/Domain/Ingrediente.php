<?php

namespace Src\Models\Domain;

class Ingrediente {

    private $idIngred, $nomeIngred, $numCaloriasIngred, $codStatusIngred;

    public function getIdIngred(){
        return $this->idIngred;
    }

    public function setIdIngred($idIngred){
        $this->id = $idIngred;
    }

    public function getNomeIngred(){
        return $this->nomeIngred;
    }

    public function setNomeIngred($nomeIngred){
        $this->nomeIngred = $nomeIngred;
    }

    public function getNumCaloriasIngred(){
        return $this->numCaloriasIngred;
    }

    public function setNumCaloriasIngred($numCaloriasIngred){
        $this->numCaloriasIngred = $numCaloriasIngred;
    }

    public function getCodStatusIngred(){
        return $this->codStatusIngred;
    }

    public function setCodStatusIngred($codStatusIngred){
        $this->codStatusIngred = $codStatusIngred;
    }
}