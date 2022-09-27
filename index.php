<html>
<head><title>Cadastro de aluno</title></head>
<body>
<?php

	require_once 'aluno.php';
	$student = new aluno();
	$resp=$student->buscarTodos();
	echo "<table>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>id</th><th>nome</th>";
	echo "<th>idade</th><th>telefone</th>";
	echo "<th></th><th></th>";
	echo "</tr>";
	echo "</thead>";
	foreach($resp as $linha){
		echo "<tr>";
		echo "<td>".$linha['id']."</td>";
		echo "<td>".$linha['nome']."</td>";
		echo "<td>".$linha['idade']."</td>";
		echo "<td>".$linha['telefone']."</td>";
		echo "<td><a href=excluir.php?id="
		.$linha['id'].">Excluir</a></td>";
		echo "<td><a href=alterar.php?id="
		.$linha['id'].">Alterar</td>";
		echo "</tr>";
	}
	echo "</table>";

?>
	<h4>Inserir Aluno</h4>

	<form action="inserir.php" method="POST">

		<label for="nome">Nome:</label>
		<input type="text" name="nome" required>
		<label for="idade">Idade:</label>
		<input type="number" name="idade">
		<label for="telefone">Telefone:</label>
		<input type="text" name="telefone">
		<button type="submit">Inserir</button>

	</form>

</body>
</html>