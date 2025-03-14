<?php
class Carro
{
    // Atributos
    public string $cor;
    public int $ano;
    public string $modelo;


    // Métodos
    public function acelerar()
    {
        echo 'Acelerando...';
    }

    public function freiando()
    {
        echo 'Freiando...';
    }
}

$carro1 = new Carro;
$carro1->cor = 'Azul';
$carro1->ano = 2023;
$carro1->modelo = 'ERFRE';


echo '<br>Carro: 1 <br>';
$carro1->acelerar();
$carro1->freiando();
