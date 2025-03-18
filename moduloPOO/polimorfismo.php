<?php

//todas as classes q herdam a classe pai (animal) devem ter a função emitir som, por isso a definição "abstract"
// as que nao tiverem vao usar a da classe pai normalmente, e todos os devs, nenhum ira poder instancia a classe animal, somente filhos dele
abstract class Animal
{
    public abstract function emitirSom(); // se eu criar um metodo abstract eu obrigo todas as classes abaixo da pai a terem um metodo emitirSom

}

class Cachorro extends Animal
{
    public function emitirSom()
    {
        return 'Au Au';
    }
}

class Gato extends Animal
{
    public function emitirSom()
    {
        return 'Miau';
    }
}

class Peixe extends Animal
{
    public function emitirSom()
    {
        return null;
    }
}

$cachorro->emitirSom();
$gato->emitirSom();
$peixe->emitirSom();
