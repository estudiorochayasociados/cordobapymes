<?php

namespace Clases;

class Novedades
{

    //Atributos
    public $id;
    public $cod;
    public $titulo;
    public $desarrollo;
    public $categoria;
    public $keywords;
    public $description;
    public $fecha;
    private $con;

    //Metodos
    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    public function add()
    {
        $sql   = "INSERT INTO `novedades`(`cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES ('{$this->cod}', '{$this->titulo}', '{$this->desarrollo}', '{$this->categoria}', '{$this->keywords}', '{$this->description}', '{$this->fecha}')";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function edit()
    {
        $sql   = "UPDATE `novedades` SET cod = '{$this->cod}', titulo = '{$this->titulo}', desarrollo = '{$this->desarrollo}', categoria = '{$this->categoria}', keywords = '{$this->keywords}', description = '{$this->description}', fecha = '{$this->fecha}' WHERE `cod`='{$this->cod}'";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function delete()
    {
        $sql   = "DELETE FROM `novedades` WHERE `cod`  = '{$this->cod}'";
        $query = $this->con->sql($sql);
        return $query;
    }

    public function view()
    {
        $sql   = "SELECT * FROM `novedades` WHERE cod = '{$this->cod}' || id = '{$this->id}' ORDER BY id DESC";
        $notas = $this->con->sqlReturn($sql);
        $row   = mysqli_fetch_assoc($notas);
        return $row;
    }

    function list($filter,$order,$limit,$cantidad) {
        $array = array();
        if (is_array($filter)) {
            $filterSql = "WHERE ";
            $filterSql .= implode(" AND ", $filter);
        } else {
            $filterSql = '';
        }

        if ($order != '') {
            $orderSql = $order;
        } else {
            $orderSql = "id DESC";
        }

        if ($limit != '') {
            $limitSql = $limit;
        } else {
            $limitSql = $cantidad;
        }

        $sql = "SELECT * FROM `novedades` $filterSql  ORDER BY $orderSql LIMIT $limitSql";
        $notas = $this->con->sqlReturn($sql); 
        if ($notas) {
            while ($row = mysqli_fetch_assoc($notas)) {
                $array[] = $row;
            }
            return $array ;
        } 
    }

    function paginador($filter,$cantidad) {
        $array = array();
        if (is_array($filter)) {
            $filterSql = "WHERE ";
            $filterSql .= implode(" AND ", $filter);
        } else {
            $filterSql = '';
        }
        $sqlNotas = "SELECT * FROM `novedades` $filterSql";
        $contar = $this->con->sqlReturn($sqlNotas);
        $totalNotas = mysqli_num_rows($contar);
        $totalPaginas = $totalNotas / $cantidad;
        return floor($totalPaginas);       
    }

    function listForNav($limit) {
        $array = array();
        if ($limit != '') {
            $limitSql = $limit;
        } else {
            $limitSql = "6";
        }
        $sql = "SELECT categorias.titulo,categorias.cod, count(categoria) FROM `novedades`,`categorias` WHERE `categoria` = categorias.cod GROUP BY categoria ORDER BY `count(categoria)` DESC LIMIT $limitSql";
         $notas = $this->con->sqlReturn($sql); 
        if ($notas) {
            while ($row = mysqli_fetch_assoc($notas)) {
                $array[] = $row;
            }
            return $array ;
        } 
    }
}
