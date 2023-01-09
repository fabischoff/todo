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