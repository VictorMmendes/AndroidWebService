<?php

class Tarefa
{
  public $titulo;
  public $descricao;

  function __construct($titulo, $descricao)
  {
    $this->titulo = $titulo;
    $this->descricao = $descricao;
  }
}

?>
