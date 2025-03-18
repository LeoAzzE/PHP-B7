<?php

class Animal
{
    public function respirar()
    {
        echo 'Respirando';
    }

    public function mover()
    {
        echo 'Movendo';
    }
}

class Mamifero extends Animal
{
    public function amamentar()
    {
        echo 'Amamentando...';
    }
    public function emitirSom()
    {
        return null;
    }
}

class Cachorro extends Mamifero
{
    public function abananarORabo()
    {
        echo 'Abanando...';
    }

    public function later()
    {
        echo 'Latindo...';
    }
}

class Gato extends Mamifero
{
    public function abananarORabo()
    {
        echo 'Abanando...';
    }

    public function miar()
    {
        echo 'Miando...';
    }
}
