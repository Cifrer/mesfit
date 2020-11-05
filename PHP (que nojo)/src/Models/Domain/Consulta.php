<?php

namespace Src\Models\Domain;

class Consulta
{

    private $idConsulta, $dataHoraConsulta, $codStatusConsulta;

    public function getIdConsulta()
    {
        return $this->idConsulta;
    }

    public function setIdConsulta($idConsulta)
    {
        $this->idConsulta = $idConsulta;
    }

    public function getDataHoraConsulta()
    {
        return $this->dataHoraConsulta;
    }

    public function setDataHoraConsulta($dataHoraConsulta)
    {
        $this->dataHoraConsulta = $dataHoraConsulta;
    }

    public function getCodStatusConsulta()
    {
        return $this->codStatusConsulta;
    }

    public function setCodStatusConsulta($codStatusConsulta)
    {
        $this->codStatusConsulta = $codStatusConsulta;
    }
}
