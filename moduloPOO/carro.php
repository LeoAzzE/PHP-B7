<?php
class Carro
{
    // Atributos
    public string $cor;
    public int $ano;
    public string $modelo;


    // Métodos
    public function __construct(string $cor, int $ano, string $modelo)
    {
        $this->cor = $cor;
        $this->ano = $ano;
        $this->modelo = $modelo;
    }


    public function acelerar()
    {
        echo 'Acelerando...';
    }

    public function freiando()
    {
        echo 'Freiando...';
    }
}

$carro1 = new Carro('Pink', 2023, 'sd');



echo '<br>Carro: 1 <br>';
$carro1->acelerar();
$carro1->freiando();
