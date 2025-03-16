<?php

class Conta
{
    private int $saldo;
    private bool $chequeEspecial;


    public function __construct(int $saldo, bool $chequeEspecial = false)
    {
        $this->saldo = $saldo;
        $this->$chequeEspecial = $chequeEspecial;
    }

    public function sacar(int $valor)
    {
        if ($valor > $this->saldo && $this->chequeEspecial == false) {
            echo 'Voce nao pode sacar mais do que o saldo';
            return false;
        }

        if ($valor > $this->saldo + 100 && $this->chequeEspecial == true) {
            echo 'Voce nao pode sacar mais do que o cheque especial (100)';
        }
        echo 'Vc sacou: ' . $valor . '<br>';
        $this->saldo -= $valor;
    }

    public function depositar(int $valor)
    {
        if ($valor > 100) {
            echo 'Voce nao pode depositar mais do que 100 reais <br>';
            return false;
        }
        echo 'Vc depositou: ' . $valor . '<br>';
        $this->saldo += $valor;
    }

    public function verSaldo()
    {
        return $this->saldo;
    }
}

$conta1 = new Conta(500);
echo 'Saldo inicial: ' . $conta1->verSaldo() . '<br>';
echo $conta1->depositar(111);
$conta1->sacar(500);
