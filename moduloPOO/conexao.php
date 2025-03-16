<?php

class Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = 'conexao com o banco de dados';
    }

    public function __destruct()
    {
        $this->conexao = '';
        echo 'Conexao encerrada com sucesso';
    }

    public function consulta()
    {
        echo 'Realizada a consulta no BD';
    }

    public function encerrarConexao()
    {
        $this->conexao = '';
        echo 'Conexao encerrada com sucesso';
    }
}
$conexao = new Conexao();
$conexao->consulta();
