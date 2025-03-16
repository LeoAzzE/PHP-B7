<?php
class Produto
{
    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }
}
