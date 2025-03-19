<?php
include('functions.php');

interface MetodoPagamento
{
    public function getName(): string;
    public function pagar($valor): bool;
}

class Paypal implements MetodoPagamento
{
    public function getName(): string
    {
        return 'Paypal';
    }

    public function pagar($valor): bool
    {
        echo 'Pagamento via paypal no valor de ' . $valor;
        return true;
    }
}

class CreditCard implements MetodoPagamento
{
    public function getName(): string
    {
        return 'CreditCard';
    }

    public function pagar($valor): bool
    {
        echo 'Pagamento via cartão de credito no valor de ' . $valor;
        return true;
    }
}

processarPagamento(new CreditCard(), 100);
