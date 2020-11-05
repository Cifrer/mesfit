<?php

namespace Src\Models\Domain;

class Dieta {

    private $idDieta, $dataFimDieta, $dataInicioDieta, $observaDieta;

    public function getIdDieta(){
        return $this->idDieta;
    }

    public function setIdDieta($idDieta){
        $this->idDieta = $idDieta;
    }

    public function getDataFimDieta(){
        return $this->dataFimDieta;
    }

    public function setDataFimDieta($dataFimDieta){
        $this->dataFimDieta = $dataFimDieta;
    }

    public function getDataInicioDieta(){
        return $this->dataInicioDieta;
    }

    public function setDataInicioDieta($dataInicioDieta){
        $this->dataInicioDieta = $dataInicioDieta;
    }

    public function getObservaDieta(){
        return $this->observaDieta;
    }

    public function setObservaDieta($observaDieta){
        $this->observaDieta = $observaDieta;
    }
}