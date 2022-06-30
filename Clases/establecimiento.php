<?php

class establecimiento
{
    public $idestablecimiento;
    public $nombre;
    public $descripcion;
    public $contacto;
    public $nombre_ciu;


    public function getIdestablecimiento(): int
    {
        return $this->idestablecimiento;
    }


    public function setIdestablecimiento(int $idestablecimiento): void
    {
        $this->idestablecimiento = $idestablecimiento;
    }


    public function getNombre(): string
    {
        return $this->nombre;
    }


    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }


    public function getDescripcion(): string
    {
        return $this->descripcion;
    }


    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }


    public function getContacto(): string
    {
        return $this->contacto;
    }


    public function setContacto(string $contacto): void
    {
        $this->contacto = $contacto;
    }


    public function getNombreCiu(): string
    {
        return $this->nombre_ciu;
    }


    public function setNombreCiu(string $nombre_ciu): void
    {
        $this->nombre_ciu = $nombre_ciu;
    }


}