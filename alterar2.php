<?php

require_once 'aluno.php';
if(isset($_POST['nome'])){

$student = new aluno();
$student->setId($_POST['id']);
$student->setNome($_POST['nome']);
$student->setIdade($_POST['idade']);
$student->setTelefone($_POST['telefone']);
if($student->alterar()){

echo "Aluno alterado com sucesso!";

}else{

echo "Erro ao alterar o aluno!";

}
echo "</br><a href='index.php'>Voltar</a>";

}

?>