<?php
session_start();
require "banco.php";
require "ajudantes.php";

$exibir_tabela = true;

if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {

  $tarefa = [];
  
  $tarefa['nome'] = $_GET['nome'];

  if (array_key_exists('descricao', $_GET)) {
    $tarefa['descricao'] = $_GET['descricao'];
  } else {
    $tarefa['descricao'] = ' ';
  }

  if (array_key_exists('prazo', $_GET)) {
    $tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
  } else {
    $tarefa['prazo'] = "0000-00-00";
  }

  $tarefa['prioridade'] = $_GET['prioridade'];

  array_key_exists('concluida', $_GET) ? $tarefa['concluida'] = 1 : $tarefa['concluida'] = 0;

  // if (array_key_exists('concluida', $_GET)) {
  //   $tarefa['concluida'] = 1;
  // } else {
  //   $tarefa['concluida'] = 0;
  // }
  gravar_tarefa($conexao, $tarefa);
  header('Location: tarefas.php');
  die;
}


$lista_tarefas = buscar_tarefas($conexao);

// $lista_tarefas = [];

// if (array_key_exists('lista_tarefas', $_SESSION)) {
//   $lista_tarefas = $_SESSION['lista_tarefas'];
// }
// session_destroy();

include "header.php";
$tarefa = [

  'id' => 0,
  'nome' => "",
  'descricao' => "",
  'prazo' => "",
  'prioridade' => 1,
  'concluida' => ''
];

include "form_template.php";

if ($exibir_tabela) {
  include "table_template.php";
}

include "footer.php";
