<?php
/**
 *
 */
class ia
{
  //Declaramos las propiedades
  public $fila = '3';
  public $columna = '1';

  //Declaramos el metodo
  public function getFila(){
    return $this->fila;
  }
  public function getColumna(){
    return $this->columna;
  }
  // Setters
  public function setFila($fil){
    $this->fila = $fil;
  }
  public function setColumna($col){
    $this->columna = $col;
  }
  // Aleatorio
  public function RandomPos(){

  }
}
?>
