<h1>Gerenciador de Tarefas</h1>
<form action="">
  <fieldset>
    <legend>Nova Tarefa:</legend>
    <label for="nome">tarefa:</label>
    <input type="text" name="nome" id="nome">
    <label for="descricao">Descrição (Opcional):</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    <label for="prazo">Prazo(Opcional)</label>
    <input type="text" name="prazo" id="prazo">
    <fieldset>
      <legend>Prioridade</legend>

      <input type="radio" name="prioridade" id="baixa" value="baixa" checked>
      <label for="baixa">Baixa</label>

      <input type="radio" name="prioridade" id="media" value="media" checked>
      <label for="media">Média</label>

      <input type="radio" name="prioridade" id="alta" value="alta" checked>
      <label for="alta">Alta</label>
    </fieldset>
    <label for="concluida">Tarefa concluída</label>
    <input type="checkbox" name="concluida" id="concluida" value="sim">

    <input type="submit" value="Cadastrar">
  </fieldset>
</form>