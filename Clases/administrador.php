<?php
require_once "config/Conexion.php";

class administrador
{
    public $idadmin;
    public $nombres;
    public $apellidos;
    public $dni;
    public $telefono;
    public $username;
    public $password;
    public $id_responsable;

    public function getIdadmin(): int
    {
        return $this->idadmin;
    }

    public function setIdadmin(int $idadmin)
    {
        $this->idadmin = $idadmin;
    }

    public function getNombres(): string
    {
        return $this->nombres;
    }

    public function setNombres(string $nombres)
    {
        $this->nombres = $nombres;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos)
    {
        $this->apellidos = $apellidos;
    }


    public function getDni(): string
    {
        return $this->dni;
    }


    public function setDni(string $dni)
    {
        $this->dni = $dni;
    }


    public function getTelefono(): string
    {
        return $this->telefono;
    }


    public function setTelefono(string $telefono)
    {
        $this->telefono = $telefono;
    }


    public function getUsername(): string
    {
        return $this->username;
    }


    public function setUsername(string $username)
    {
        $this->username = $username;
    }


    public function getPassword(): string
    {
        return $this->password;
    }


    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getIdResponsable(): int
    {
        return $this->id_responsable;
    }

    public function setIdResponsable(int $id_responsable)
    {
        $this->id_responsable = $id_responsable;
    }

    public function InsertarAdmin()
    {
        $conexion = new Conexion();
        try {
            $conn = $conexion->abrir();
            $sql = "INSERT INTO administrador(idadmin,nombres,apellidos,dni,telefono,username,password,id_respoonsable) 
                    VALUES('this->idadmin','this->nombres','this->apellidos','this->dni','this->telefono','this->usermame','this->password','this->id_responsable')";
            $resultados = $conn->exec($sql);
            $conexion->cerrar();
            return $resultados;
        } catch (PDOException $e) {
            echo "Hubo un error al insertar " . $e->getMessage();
        }
    }

    public function Mostrar()
    {
        $conexion = new Conexion();
        try {
            $conn = $conexion->abrir();
            $sql = "SELECT * FROM responsable";
            $resultados = $conn->query($sql);
            $conexion->cerrar();
            return $resultados;
        } catch (PDOException $e) {
            echo "Error en mostrar" . $e->getMessage();
        }
    }

   public function guardar()
    {
        $conexion = new Conexion();
        try {
            $conn = $conexion->abrir();
            $sql = "INSERT INTO destinoturis(iddestinoturis,nombrer_ciu,cod_postal,establecimientos) 
                    VALUES('this->iddestinoturis','this->nombre_ciu','this->cod_postal','this->establecimientos')";
            $resultados = $conn->exec($sql);
            $conexion->cerrar();
            return $resultados;
        }   catch (PDOException $e){
            echo "Error al guardar" . $e->getMessage();
        }
    }

}
