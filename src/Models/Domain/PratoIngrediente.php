<?php

namespace Src\Models\Domain;

class PratoIngrediente {

    private $idPrato, $idIngred;

    public function getIdPrato(){
        return $this->idPrato;
    }

    public function setIdPrato($idPrato){
        $this->id = $idPrato;
    }

    public function getIdIngred(){
        return $this->idIngred;
    }

    public function setIdIngred($idIngred){
        $this->nome = $idIngred;
    }

}