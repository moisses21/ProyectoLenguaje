<?php

class destinoturis
{
    public $iddestinoTuris;
    public $nombre_ciu;
    public $cod_postal;
    public $establecimientos;

    public function getIddestinoTuris(): int
    {
        return $this->iddestinoTuris;
    }


    public function setIddestinoTuris(int $iddestinoTuris): void
    {
        $this->iddestinoTuris = $iddestinoTuris;
    }


    public function getNombreCiu(): string
    {
        return $this->nombre_ciu;
    }


    public function setNombreCiu(string $nombre_ciu): void
    {
        $this->nombre_ciu = $nombre_ciu;
    }


    public function getCodPostal(): string
    {
        return $this->cod_postal;
    }


    public function setCodPostal(string $cod_postal): void
    {
        $this->cod_postal = $cod_postal;
    }


    public function getEstablecimientos(): string
    {
        return $this->establecimientos;
    }


    public function setEstablecimientos(string $establecimientos): void
    {
        $this->establecimientos = $establecimientos;
    }


}