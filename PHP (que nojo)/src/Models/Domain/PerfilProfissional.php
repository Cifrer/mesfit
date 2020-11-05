<?php

namespace Src\Models\Domain;

class PerfilProfissional {

    private $codPerfil, $idUsu,$avaliacaoPerfil, $tempoAtuacaoPerfil, $descTitulacaoPerfil, $resumoExperienciaPerfil, $codStatusPerfil;

    public function getCodPerfil(){
        return $this->codPerfil;
    }

    public function setCodPerfil($codPerfil){
        $this->codPerfil = $codPerfil;
    }

    public function getIdUsu(){
        return $this->idUsu;
    }

    public function setIdUsu($idUsu){
        $this->idUsu = $idUsu;
    }

    public function getAvaliacaoPerfil(){
        return $this->avaliacaoPerfil;
    }

    public function setAvaliacaoPerfil($avaliacaoPerfil){
        $this->avaliacaoPerfil = $avaliacaoPerfil;
    }

    public function getTempoAtuacaoPerfil(){
        return $this->tempoAtuacaoPerfil;
    }

    public function setTempoAtuacaoPerfil($tempoAtuacaoPerfil){
        $this->tempoAtuacaoPerfil = $tempoAtuacaoPerfil;
    }

    public function getDescTitulacaoPerfil(){
        return $this->descTitulacaoPerfil;
    }

    public function setDescTitulacaoPerfil($descTitulacaoPerfil){
        $this->descTitulacaoPerfil = $descTitulacaoPerfil;
    }

    public function getResumoExperienciaPerfil(){
        return $this->resumoExperienciaPerfil;
    }

    public function setResumoExperienciaPerfil($resumoExperienciaPerfil){
        $this->resumoExperienciaPerfil = $resumoExperienciaPerfil;
    }

    public function getCodStatusPerfil(){
        return $this->codStatusPerfil;
    }

    public function setCodStatusPerfil($codStatusPerfil){
        $this->codStatusPerfil = $codStatusPerfil;
    }
}