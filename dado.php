<?php

class dado
{
  //funciones
private $minnumdado=1;
private $maxnumdado=12;
private $tirada=[];
public $tirardado=0;
public $imprimirtiradas=0;
public $mediatiradas=0;
private $guardartirada=0;

//setters

public function setminnumdado($dato){
  $this->minnumdado=$dato;
}
public function setmaxnumdado($maxdado){
  $this->maxnumdado=$maxdado;
}
public function settirardado($jugardado){
  $this->tirardado=$jugardado;
}
public function setimprimirtiradas($tirada){
  $this->imprimirtiradas=$tirada;
}
public function setmediatiradas($media){
  $this->mediatiradas=$media;
}
//getters

public function getminumdado(){
  return $this->minnumdado;
}
public function getmaxnumdado(){
  return $this->maxnumdado;
}
public function gettirardado(){
  return $this->tirardado=rand($this->minnumdado, $this->maxnumdado);

}
public function getimprimirtiradas(){
  return $this->imprimirtiradas;
}
public function getmediatiradas(){
  return $this->mediatiradas;
}


//tirardado

public function tirardado(){
    return $this->tirardado=rand($this->minnumdado, $this->maxnumdado);
    $this->guardartirada($tirardado);
}
  }
 ?>
