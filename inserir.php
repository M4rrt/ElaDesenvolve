<?php

	require_once 'aluno.php';
	if(isset($_POST['nome'])){

	$student = new aluno();
	$student->setNome($_POST['nome']);
	$student->setIdade($_POST['idade']);
	$student->setTelefone($_POST['telefone']);
	if($student->inserir()){

?>
	<script>
	window.alert("Aluno inserido com sucesso!");
	window.location.href="./index.php";
	</script>
<?php

}else{
?>
	<script>
	window.alert("Erro ao inserir o aluno!");
	window.location.href="./index.php";
	</script>
<?php

}

}

?>