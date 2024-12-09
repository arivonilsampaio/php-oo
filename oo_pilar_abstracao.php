<?php

// modelo
class Funcionario
{
  // atributos
  public $nome = null;
  public $telefone = null;
  public $numFilhos = null;
  public $cargo = null;
  public $salario = null;

  // getters setters (overloading / sobrecarga)

  function __set($atributo, $valor)
  {
    $this->$atributo = $valor;
  }

  function __get($atributo)
  {
    return $this->$atributo;
  }
  

  /*
  // setters
  function setNome($nome){
    $this->nome = $nome;
  }
  
  function setTelefone($telefone){
    $this->telefone = $telefone;
  }
  
  function setNumFilhos($numFilhos){
    $this->numFilhos = $numFilhos;
  }
 
    // getters
  function getNome(){
    return $this->nome;
  }
  
  function getTelefone(){
    return $this->telefone;
  }
  
  
  function getNumFilhos(){
    return $this->numFilhos;
  }
  

  */
  // métodos
  function resumirCadFunc()
  {
    // return "$this->nome possui $this->numFilhos filho(s) número de telefone: $this->telefone cargo $this->cargo salário $this->salario";
    return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filhos | telefone ' . $this->__get('telefone') . ' | cargo: ' . $this->__get('cargo') . ' | salário: ' . $this->__get('salario');
  }
    function modificarNumFilhos($numFilhos)
  {
    // afetar um atributo do objeto
    $this->numFilhos = $numFilhos;
  }
}
$y = new Funcionario();
$y->__set('nome', 'José');
$y->__set('numFilhos', 2);
$y->__set('telefone', '15 35355-4646');
$y->__set('cargo', 'Contador');
$y->__set('salario', 5000);
echo $y->resumirCadFunc();
// echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) telefone: ' . $y->__get('telefone') . ' cargo: ' . $y->__get('cargo') . ' salario: ' . $y->__get('salario');

echo '<br>';
$x = new Funcionario();
$x->__set( 'nome','Maria');
$x->__set( 'numFilhos','3');
$x->__set( 'telefone','11 65645-5555');
$x->__set( 'cargo', 'Assessora');
$x->__set( 'salario', 10000);
echo $x->resumirCadFunc();

// echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) telefone: ' . $x->__get('telefone') . ' cargo: ' . $x->__get('cargo') . ' salario: ' . $x->__get('salario');
?>