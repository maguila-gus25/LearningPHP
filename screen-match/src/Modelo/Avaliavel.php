<?php

//Por ser uma interface, todos os métodos já são abstratos
//Não preciso escrever 'abstract' antes de 'public'
interface Avaliavel
{
    public function avalia(float $nota): void;
    public function media(): float;
}