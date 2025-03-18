<?php

abstract class Figura
{
    public abstract function calcularArea();
}


class Quadrado extends Figura
{
    public $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return $this->lado * $this->lado;
    }
}


class Retangulo extends Figura
{
    public $altura;
    public $largura;

    public function __construct(int $altura, int $largura)
    {
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function calcularArea()
    {
        return $this->largura * $this->altura;
    }
}


class Triangulo extends Figura
{
    public $base;
    public $altura;

    public function __construct(int $base, int $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return $this->base * ($this->altura / 2);
    }
}



$quadrado = new Quadrado(7);
echo $quadrado->calcularArea() . '<br>';

$retangulo = new Retangulo(10, 5);
echo $retangulo->calcularArea() . '<br>';

$triangulo = new Triangulo(10, 5);
echo $triangulo->calcularArea();
