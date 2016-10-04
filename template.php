<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Gerenciador de Tarefas</title>
	<link rel="stylesheet" type="text/css" href="css/tarefas.css">
</head>
<body>
	<h1>Gerenciador de Tarefas</h1>
	<form>
		<fieldset>
			<legend>Nova Tarefa</legend>
			<label>Tarefa: <input type ="text" name="nome" class="form-control"/></label>
					
			<label>Descrição (Opcional): <textarea name="descricao"></textarea></label>
					
			<label>Prazo (Opcional): <input type="text" name="prazo"/></label>
					
			<fieldset>
				<legend>Prioridade:</legend>
				<label>
					<input type="radio" name="prioridade" value="1" checked />Baixa
					<input type="radio" name="prioridade" value="2" />Média
					<input type="radio" name="prioridade" value="3" />Alta
				</label>
			</fieldset>

			<label>Tarefa concluída: <input type="checkbox" name="concluida" value="1" checked/></label>
					
			<input type="submit" class="btn btn-success" value="Cadastrar" />
		</fieldset>
	</form><br/>	

	<table class="table table-bordered">
		<tr>
			<th>Tarefa</th>
			<th>Descrição</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluída</th>
		</tr>
		<?php foreach($lista_tarefas as $tarefa) : ?>
			<tr>
				<td><?php echo $tarefa['nome']; ?></td>
				<td><?php echo $tarefa['descricao']; ?></td>
				<td><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
				<td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
				<td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
			</tr>
		<?php endforeach; ?>	
	</table>
</body>
</html>