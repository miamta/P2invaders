<?php

class ia
{
//declaracion de una propiedad
public $columna = '1';
public $fila= '3';

//declaracion de metodo
public function getcolumna(){
return $this->columna;
}
public function getfila(){
  return $this->fila;
}
//setters
public function setColumna($col){
$this->columna=$col;
}

public function setFila($fil) {
$this->fila=$fil;
}
//random
public function RandomPos(){

}
}

 ?>
