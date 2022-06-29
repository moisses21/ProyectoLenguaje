<?php
require_once "config.php";
class Conexion
{
    private $dsn;
    private $usuario;
    private $clave;
    private $conexion;

    public function __construct()
    {
        $this->dsn = constant("myDSN");
        $this->usuario = constant("myUsername");
        $this->clave = constant("myPassword");
        $this->cerrar();
    }

    public function abrir(){
        $this->conexion = new PDO($this->dsn, $this->usuario, $this->clave,
            array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'UTF8'"));
        return $this->conexion;
    }

    public function cerrar(){
        $this->conexion = null;
        return $this->conexion;
    }
}