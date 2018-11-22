<?php namespace Clases;

class Conexion
{
    private $datos = array("host"=> "localhost","user"=> "root","pass"=> "","db"  => "cordobapymes");

    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect($this->datos["host"], $this->datos["user"], $this->datos["pass"], $this->datos["db"]);
        $this->con->set_charset("utf8");
    }

    public function con()
    {
        $conexion = mysqli_connect($this->datos["host"], $this->datos["user"], $this->datos["pass"], $this->datos["db"]);
      //  mysqli_set_charset($conexion,'utf8');
        return $conexion;
    }

    public function sql($query)
    {
        $this->con->query($query);
    }

    public function sqlReturn($query)
    {
        $dato = $this->con->query($query);
        return $dato;
    }
}
