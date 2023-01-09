<table>
  <tr>
    <th>Tarefa</th>
    <th>Descrição</th>
    <th>Prazo</th>
    <th>Prioridade</th>
    <th>Concluída</th>
  </tr>
  <?php foreach ($lista_tarefas as $tarefa) : ?>
  <tr>
    <td><?= $tarefa['nome'] ?></td>
    <td><?= $tarefa['descricao'] ?></td>
    <td><?= traduz_data_para_exibir($tarefa['prazo']) ?></td>
    <td><?= traduz_prioridade($tarefa['prioridade']) ?></td>
    <td><?= traduz_concluida($tarefa['concluida']) ?></td>
  </tr>
  <?php endforeach; ?>
</table>