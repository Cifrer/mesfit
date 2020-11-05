<?php

namespace Src\Models\Domain;

class EstabelecimentoPrato {

    private $idEstab, $idPrato;

    public function getIdEstab(){
        return $this->idEstab;
    }

    public function setIdEstab($idEstab){
        $this->idEstab = $idEstab;
    }

    public function getIdPrato(){
        return $this->idPrato;
    }

    public function setIdPrato($idPrato){
        $this->idPrato = $idPrato;
    }

}