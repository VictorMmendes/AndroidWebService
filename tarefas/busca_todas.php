<?php
  // $teste['nome'] = "Victor";
  // $teste['sobrenome'] = "Mendes";
  // $teste['animais'] = ["Fritz", "Franx"];
  //
  // echo json_encode($teste);

  require_once 'Tarefa.php';

  $tarefa1 = new Tarefa("Lavar a louça", "Com sabao");
  $tarefa2 = new Tarefa('Comer', 'Não esquecer');
  $tarefa3 = new Tarefa('Tomar banho', 'hoje');
  $tarefa4 = new Tarefa('Vender o carro', 'mercedez');

  $tarefas = [];
  array_push($tarefas, $tarefa1);
  array_push($tarefas, $tarefa2);
  array_push($tarefas, $tarefa3);
  array_push($tarefas, $tarefa4);

  echo json_encode($tarefas);
?>
