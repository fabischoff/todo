<?php

//CREATE USER 'sistematarefa'@'localhost' IDENTIFIED WITH caching_sha2_password BY '@sistema_tarefa*';
//GRANT ALL PRIVILEGES ON tarefas.* TO 'sistematarefa'@'localhost' WITH GRANT OPTION;

$bdServidor = '127.0.0.1';
$bdUsuario = 'sistematarefa';
$bdSenha = '@sistema_tarefa*';
$bdBanco = 'tarefas';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (!$conexao) {
  /* Use your preferred error logging method here */
  error_log('Connection error: ' . mysqli_connect_errno());
}

function buscar_tarefas($conexao)
{
  $sqlBusca = "SELECT * FROM tarefas WHERE ativa = 1";
  $resultado = mysqli_query($conexao, $sqlBusca);

  $tarefas = [];

  while ($tarefa = mysqli_fetch_assoc($resultado)) {
    $tarefas[] = $tarefa;
  }

  return $tarefas;
}

function gravar_tarefa($conexao, $tarefa)
{
  $sqlGravar = "INSERT INTO tarefas (nome, descricao, prioridade, prazo, concluida) VALUES
                 (
                '{$tarefa['nome']}',
                '{$tarefa['descricao']}',
                {$tarefa['prioridade']},
                '{$tarefa['prazo']}',
                {$tarefa['concluida']}
                )";
  
  mysqli_query($conexao, $sqlGravar);
}

function buscar_tarefa($conexao, $id)
{
  $sqlBusca = "SELECT * FROM tarefas WHERE id = {$id}";
  $resultado = mysqli_query($conexao, $sqlBusca);
  return mysqli_fetch_array($resultado);
}

function editar_tarefa($conexao, $tarefa)
{
  $sqlEditar = "
    UPDATE tarefas SET 
          nome = '{$tarefa['nome']}',
          descricao = '{$tarefa['descricao']}',
          prioridade = {$tarefa['prioridade']},
          prazo ='{$tarefa['prazo']}',
          concluida ={$tarefa['concluida']}
     WHERE id = {$tarefa['id']}";
  echo $sqlEditar;
  mysqli_query($conexao, $sqlEditar);
}


function remover_tarefa($conexao, $id)
{
  $removeSql = "update tarefas set ativa = 0 where id = $id";
  mysqli_query($conexao, $removeSql);
}
