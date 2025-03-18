<?php

class Veiculo
{
    public $marca;
    public $modelo;


    public function mover()
    {
        echo 'Andando...';
    }

    public function freiar()
    {
        echo 'Freiando...';
    }
}

class Carro extends Veiculo
{

    public $qndPortas;


    function __construct($marca, $modelo, $qndPortas)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->qndPortas = $qndPortas;
    }

    public function abrirPortas()
    {
        echo 'abrindo as ' . $this->qndPortas . 'portas...';
    }
}

$carro = new Carro('ford', 'Mustang', 4);
$carro->mover();
$carro->abrirPortas();
$carro->freiar();
$carro->mover();
