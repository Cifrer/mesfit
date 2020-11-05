<?php

namespace Src\Models\Domain;

class ComentarioPrato {

    private $idComenta, $idPrato, $idUsu, $dtHrComenta, $descComenta, $codStatusComenta;

    public function getIdComenta(){
        return $this->idComenta;
    }

    public function setIdComenta($idComenta){
        $this->idComenta = $idComenta;
    }

    public function getIdPrato(){
        return $this->idPrato;
    }

    public function setIdPrato($idPrato){
        $this->idPrato = $idPrato;
    }

    public function getIdUsu(){
        return $this->idUsu;
    }

    public function setIdUsu($idUsu){
        $this->idUsu = $idUsu;
    }

    public function getDtHrComenta(){
        return $this->dtHrComenta;
    }

    public function setDtHrComenta($dtHrComenta){
        $this->dtHrComenta = $dtHrComenta;
    }

    public function getDescComenta(){
        return $this->descComenta;
    }

    public function setDescComenta($descComenta){
        $this->descComenta = $descComenta;
    }

    public function getCodStatusComenta(){
        return $this->codStatusComenta;
    }

    public function setCodStatusComenta($codStatusComenta){
        $this->codStatusComenta = $codStatusComenta;
    }
}