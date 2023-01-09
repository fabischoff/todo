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
    <td><?= $tarefa['prazo'] ?></td>
    <td><?= $tarefa['prioridade'] ?></td>
    <td><?= $tarefa['concluida'] ?></td>
  </tr>
  <?php endforeach; ?>
</table>