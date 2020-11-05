<?php

namespace Src\Models\Domain;

class Cardapio {

    private $idDieta, $tipoCardapio, $idPrato;

    public function getIdPrato(){
        return $this->idPrato;
    }

    public function getIdDieta(){
        return $this->idDieta;
    }

    public function setIdDieta($idDieta){
        $this->idDieta = $idDieta;
    }

    public function setIdPrato($idPrato){
        $this->idPrato = $idPrato;
    }

    public function getTipoCardapio(){
        return $this->tipoCardapio;
    }

    public function setTipo($tipoCardapio){
        $this->tipoCardapio = $tipoCardapio;
    }
}