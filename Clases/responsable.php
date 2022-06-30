<?php

class responsable
{
    public  $idresponsable;
    public  $nombre;
    public  $apellido;
    public  $dni;
    public  $ciudad;
    public  $est_resp;
    public  $telefono;
    public  $username;
    public  $password;


    public function getIdresponsable(): int
    {
        return $this->idresponsable;
    }

    public function setIdresponsable(int $idresponsable): void
    {
        $this->idresponsable = $idresponsable;
    }


    public function getNombre(): string
    {
        return $this->nombre;
    }


    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }


    public function getApellido(): string
    {
        return $this->apellido;
    }


    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }


    public function getDni(): string
    {
        return $this->dni;
    }


    public function setDni(string $dni): void
    {
        $this->dni = $dni;
    }


    public function getCiudad(): string
    {
        return $this->ciudad;
    }


    public function setCiudad(string $ciudad): void
    {
        $this->ciudad = $ciudad;
    }


    public function getEstResp(): string
    {
        return $this->est_resp;
    }


    public function setEstResp(string $est_resp): void
    {
        $this->est_resp = $est_resp;
    }


    public function getTelefono(): string
    {
        return $this->telefono;
    }


    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }

    public function getUsername(): string
    {
        return $this->username;
    }


    public function setUsername(string $username): void
    {
        $this->username = $username;
    }


    public function getPassword(): string
    {
        return $this->password;
    }


    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


}