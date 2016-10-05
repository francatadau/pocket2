<?php

class ia
{
public $columna = '2';
public $fila = '2';

public function getcolumna()
{
$this-> columna = rand(1,3);
return $this->columna;
}

public function getfila()
{
$this-> fila = rand(1,3);
return $this->fila;
}

}
?>
