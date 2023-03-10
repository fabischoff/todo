<?php

function traduz_prioridade($codigo)
{
  $prioridade = '';
  switch ($codigo) {
    case 1:
      $prioridade = 'Baixa';
      break;
    case 2:
      $prioridade = 'Média';
      break;
    case 3:
      $prioridade = 'Alta';
      break;
  }
  return $prioridade;
}

function traduz_data_para_banco($data)
{
  if ($data == '') {
    return '1970-01-01';
  }

  $dados = explode("-", $data);
  $data_banco = "{$dados[0]}-{$dados[1]}-{$dados[2]}";
  return $data_banco;
}

function traduz_data_para_exibir($data)
{
  if ($data == "" or $data == "1970-01-01") {
    return "";
  }

  $dados = explode("-", $data);
  $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
  return $data_exibir;
}

function traduz_concluida($concluida)
{
  if ($concluida == 1) return "Sim";
  return "Não";
}